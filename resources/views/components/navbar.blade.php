
@php
    $username = request()->query('username', 'Guest');
    $role = request()->query('role', 'user');
    $params = ['username' => $username, 'role' => $role];
@endphp

<nav style="background: #F8DCE8; padding: 18px 0;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">

        <a href="{{ route('login') }}"
           style="font-size: 23px; font-weight: bold; color: #A34F75; text-decoration: none;">
            Daylist.
        </a>

        <div style="display: flex; gap: 20px; flex-wrap: wrap;">
            @if(request()->routeIs('dashboard', 'pengelolaan', 'profile'))
                <a href="{{ route('dashboard', $params) }}"
                   style="color: #795968; text-decoration: none;">
                    Dashboard
                </a>

                @if($role === 'admin')
                    <a href="{{ route('pengelolaan', $params) }}"
                       style="color: #795968; text-decoration: none;">
                        Pengelolaan
                    </a>
                @endif

                <a href="{{ route('profile', $params) }}"
                   style="color: #795968; text-decoration: none;">
                    Profile
                </a>

                <a href="{{ route('login') }}"
                   style="color: #A34F75; text-decoration: none;">
                    Logout
                </a>
            @endif
        </div>

    </div>
</nav>
