
@extends('layouts.app')

@section('title', 'Dashboard - Daylist')

@section('content')

<div style="margin-bottom: 25px;">
    <h1>Halo, {{ $username }}! 👋</h1>
    <p style="color: #987D8A; margin-top: 8px;">
        Selamat datang di Daylist. Yuk, atur kegiatanmu hari ini!
    </p>
</div>

@if($role === 'admin')

    <h2 style="margin-bottom: 18px;">Dashboard Admin</h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px;">

        <div class="card">
            <p>Total Pengguna</p>
            <h2 style="margin-top: 10px;">12</h2>
        </div>

        <div class="card">
            <p>Total Reminder</p>
            <h2 style="margin-top: 10px;">35</h2>
        </div>

        <div class="card">
            <p>Kategori</p>
            <h2 style="margin-top: 10px;">5</h2>
        </div>

    </div>

@else

    <h2 style="margin-bottom: 18px;">Reminder Hari Ini</h2>

@endif

<div class="card" style="margin-top: 25px;">

    <h3 style="margin-bottom: 20px;">Daftar Kegiatan</h3>

    @foreach($reminders as $reminder)

        <div style="padding: 15px 0; border-bottom: 1px solid #F2E4EA;">

            <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px; flex-wrap: wrap;">

                <div>
                    <h3 style="font-size: 16px;">
                        {{ $reminder['title'] }}
                    </h3>

                    <p style="font-size: 13px; color: #987D8A; margin-top: 6px;">
                        {{ $reminder['category'] }} · {{ $reminder['time'] }}
                    </p>
                </div>

                <span style="background: #F8DCE8; color: #A34F75; padding: 7px 12px; border-radius: 20px; font-size: 12px;">
                    {{ $reminder['status'] }}
                </span>

            </div>

        </div>

    @endforeach

</div>

@if($role === 'admin')
    <div style="margin-top: 25px;">
        <a href="{{ route('pengelolaan', ['username' => $username, 'role' => $role]) }}" class="btn">
            Lihat Pengelolaan
        </a>
    </div>
@endif

@endsection
