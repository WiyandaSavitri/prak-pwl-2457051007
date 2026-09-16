<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama'  => 'Wiyanda Savitri',
            'npm'   => '2457051007',
            'kelas' => 'A',
        ];

        return view('profile', $data);
    }
}