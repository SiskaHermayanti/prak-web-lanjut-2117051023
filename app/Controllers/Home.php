<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function profile()
    {

        $data = [
            'nama'  => 'Siska Hermayanti',
            'kelas' => 'CD',
            'npm' => '2117051023'
        ];
        return view('profile', $data);
    }

    // public function profile_url($nama = "", $kelas = "", $npm = "")
    // {

    //     $data = [
    //         'nama'  => $nama,
    //         'kelas' => $kelas,
    //         'npm' => $npm
    //     ];
    //     return view('profile_url', $data);
    // }
}


