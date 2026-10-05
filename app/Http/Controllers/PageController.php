<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Data dinamis (array) dikirim dari route/controller ke view
        $skills = [
            ['name' => 'HTML & CSS', 'level' => 'Pemula'],
            ['name' => 'JavaScript', 'level' => 'Pemula'],
            ['name' => 'PHP & Laravel', 'level' => 'Pemula'],
            ['name' => 'Python', 'level' => 'Menengah'],
        ];

        return view('home', [
            'name' => 'Muhammad Putra Cipika Pandia',
            'tagline' => 'A learner — Mahasiswa Ilmu Komputer',
            'skills' => $skills,
        ]);
    }

    public function about()
    {
        $bio = 'Saya mahasiswa Ilmu Komputer yang senang belajar hal baru, terutama seputar pengembangan web dan data science. Project ini dibuat sebagai bagian dari Tugas Rutin 9 — Setup Laravel.';

        $facts = [
            'Domisili' => 'Binjai, Sumatra Utara',
            'Program Studi' => 'Ilmu Komputer',
            'Angkatan' => '2025',
        ];

        return view('about', compact('bio', 'facts'));
    }

    public function contact()
    {
        $email = 'dailyputra45@gmail.com';

        return view('contact', compact('email'));
    }
}
