
@extends('layouts.app')

@section('title', 'Login - Daylist')

@section('content')

<div style="max-width: 450px; margin: 35px auto;">

    <div class="card" style="padding: 35px;">

        <div style="text-align: center; margin-bottom: 28px;">
            <h1 style="font-size: 32px; color: #A34F75;">
                Welcome to Daylist!
            </h1>

            <p style="margin-top: 10px; color: #987D8A;">
                Organize your day, one reminder at a time.
            </p>
        </div>

        <form action="{{ route('dashboard') }}" method="GET">

            <div style="margin-bottom: 20px;">
                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username kamu"
                    required
                >
            </div>

            <div style="margin-bottom: 25px;">
                <label for="role">
                    Pilih Role
                </label>

                <select id="role" name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="btn" style="width: 100%;">
                Login
            </button>

        </form>

        <p style="text-align: center; margin-top: 25px; color: #987D8A; font-size: 13px;">
            Your daily activities, organized in one place.
        </p>

    </div>

</div>

@endsection
