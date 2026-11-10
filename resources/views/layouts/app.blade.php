
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Daylist')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #FFF9F9;
            color: #594653;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        .main-content {
            min-height: 75vh;
            padding: 35px 0;
        }

        .btn {
            display: inline-block;
            background-color: #C77C99;
            color: white;
            padding: 11px 22px;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #A95E7D;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(180, 120, 145, 0.08);
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #E9CBD6;
            border-radius: 9px;
            outline: none;
            margin-top: 7px;
        }

        input:focus, select:focus {
            border-color: #C77C99;
        }

        h1, h2, h3 {
            color: #795968;
        }

        @media (max-width: 600px) {
            .container {
                width: 94%;
            }

            .main-content {
                padding: 22px 0;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="container main-content">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
