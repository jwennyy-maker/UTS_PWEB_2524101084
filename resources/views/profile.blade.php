
@extends('layouts.app')

@section('title', 'Profile - Daylist')

@section('content')

<div style="max-width: 600px; margin: 20px auto;">
    <div class="card" style="text-align: center; padding: 35px;">

        <div style="font-size: 45px; margin-bottom: 15px;">
            👤
        </div>

        <h1>My Profile</h1>

        <p style="margin-top: 10px; color: #987D8A;">
            Informasi akun Daylist kamu
        </p>

        <div style="text-align: left; margin-top: 30px;">

            <div style="padding: 15px 0;">
                <small>Username</small>
                <h3>{{ $username }}</h3>
            </div>

            <div style="padding: 15px 0;">
                <small>Role</small>
                <h3>{{ ucfirst($role) }}</h3>
            </div>

            <div style="padding: 15px 0;">
                <small>Application</small>
                <h3>Daylist</h3>
            </div>

        </div>

        <a href="{{ route('dashboard', ['username' => $username, 'role' => $role]) }}"
           class="btn" style="width: 100%; margin-top: 20px;">
            Kembali ke Dashboard
        </a>

    </div>
</div>

@endsection
