
@extends('layouts.app')

@section('title', 'Pengelolaan - Daylist')

@section('content')

<div style="margin-bottom: 25px;">
    <h1>Pengelolaan Daylist</h1>
    <p style="color: #987D8A; margin-top: 8px;">
        Halo, {{ $username }}! Berikut ringkasan data aplikasi Daylist.
    </p>
</div>

@if($role === 'admin')

    <div class="card" style="margin-bottom: 25px;">
        <h2 style="margin-bottom: 15px;">Daftar Pengguna</h2>

        @foreach($users as $user)
            <div style="padding: 12px 0; border-bottom: 1px solid #F2E4EA;">
                <strong>{{ $user['name'] }}</strong>
                <span style="float: right; color: #987D8A;">
                    {{ $user['role'] }}
                </span>
            </div>
        @endforeach
    </div>

    <div class="card" style="margin-bottom: 25px;">
        <h2 style="margin-bottom: 15px;">Kategori Reminder</h2>

        @foreach($categories as $category)
            <span style="display: inline-block; background: #F8DCE8;
                color: #A34F75; padding: 8px 13px; border-radius: 20px;
                margin: 5px;">
                {{ $category }}
            </span>
        @endforeach
    </div>

    <div class="card">
        <h2 style="margin-bottom: 15px;">Seluruh Reminder</h2>

        @foreach($reminders as $reminder)
            <div style="padding: 15px 0; border-bottom: 1px solid #F2E4EA;">
                <strong>{{ $reminder['title'] }}</strong>
                <p style="font-size: 13px; color: #987D8A; margin-top: 6px;">
                    {{ $reminder['category'] }} · {{ $reminder['time'] }}
                </p>
                <small>Status: {{ $reminder['status'] }}</small>
            </div>
        @endforeach
    </div>

@else

    <div class="card">
        <h2>Akses Tidak Tersedia</h2>
        <p style="margin-top: 10px;">
            Halaman pengelolaan hanya ditujukan untuk Admin.
        </p>
        <a href="{{ route('dashboard', ['username' => $username, 'role' => $role]) }}"
           class="btn" style="margin-top: 15px;">
            Kembali ke Dashboard
        </a>
    </div>

@endif

@endsection
