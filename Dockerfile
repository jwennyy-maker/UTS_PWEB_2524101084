
# Menggunakan PHP 8.3 CLI
FROM php:8.3-cli-bookworm

# Install dependency sistem dan ekstensi PHP
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install \
    pdo_mysql mbstring exif pcntl bcmath gd zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Mengambil Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Direktori kerja aplikasi
WORKDIR /var/www/html

# Menyalin source code
COPY . .

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Mengatur permission folder Laravel
RUN mkdir -p storage/logs \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Port aplikasi
EXPOSE 8000

# Menjalankan Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
