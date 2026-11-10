<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    // Halaman profile
public function profile(Request $request)
{
    $username = $request->query('username', 'Guest');
    $role = $request->query('role', 'user');

    return view('profile', compact(
        'username',
        'role'
    ));
}

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $role = $request->query('role', 'user');

        $reminders = [
            [
                'title' => 'Mengerjakan tugas PWEB',
                'category' => 'Kuliah',
                'time' => '09.00',
                'status' => 'Berjalan'
            ],
            [
                'title' => 'Minum oatmeal',
                'category' => 'Kesehatan',
                'time' => '13.00',
                'status' => 'Belum'
            ],
            [
                'title' => 'Membeli kebutuhan kos',
                'category' => 'Pribadi',
                'time' => '16.00',
                'status' => 'Belum'
            ],
            [
                'title' => 'Menyelesaikan laporan',
                'category' => 'Kuliah',
                'time' => '20.00',
                'status' => 'Selesai'
            ],
        ];

        return view('dashboard', compact(
            'username',
            'role',
            'reminders'
        ));
    }

    // Halaman pengelolaan khusus admin
public function pengelolaan(Request $request)
{
    $username = $request->query('username', 'Admin');
    $role = $request->query('role', 'admin');

    $categories = [
        'Kuliah',
        'Belajar',
        'Pribadi',
        'Kesehatan',
        'Organisasi'
    ];

    $users = [
        ['name' => 'juhoon', 'role' => 'User'],
        ['name' => 'Mingyu', 'role' => 'User'],
        ['name' => 'Martin', 'role' => 'User'],
        ['name' => 'James', 'role' => 'User']
    ];

    $reminders = [
        [
            'title' => 'Mengerjakan tugas PWEB',
            'category' => 'Kuliah',
            'time' => '09.00',
            'status' => 'Berjalan'
        ],
        [
            'title' => 'Minum oatmeal',
            'category' => 'Kesehatan',
            'time' => '13.00',
            'status' => 'Belum'
        ],
        [
            'title' => 'Membeli kebutuhan kos',
            'category' => 'Pribadi',
            'time' => '16.00',
            'status' => 'Belum'
        ],
        [
            'title' => 'Menyelesaikan laporan',
            'category' => 'Kuliah',
            'time' => '20.00',
            'status' => 'Selesai'
        ]
    ];

    return view('pengelolaan', compact(
        'username',
        'role',
        'categories',
        'users',
        'reminders'
    ));
}
}

