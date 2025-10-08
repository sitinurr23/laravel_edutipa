<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
       
        $buku = [
            ['judul' => 'Pemrograman Laravel Dasar', 'penulis' => 'Sinta Aeni', 'tahun' => 2023],
            ['judul' => 'Belajar PHP Modern', 'penulis' => 'Rika Nur', 'tahun' => 2022],
            ['judul' => 'Desain Database MySQL', 'penulis' => 'Ahmad Rafi', 'tahun' => 2021],
            ['judul' => 'Pemrograman Web Lanjutan', 'penulis' => 'Nur Fadilah', 'tahun' => 2024],
            ['judul' => 'Framework Laravel untuk Pemula', 'penulis' => 'Budi Santoso', 'tahun' => 2023],
        ];


        return view('home', ['buku' => $buku]);
    }


    public function kirimMessage(Request $request)
    {

        $message = $request->message;


        $buku = [
            ['judul' => 'Pemrograman Laravel Dasar', 'penulis' => 'Sinta Aeni', 'tahun' => 2023],
            ['judul' => 'Belajar PHP Modern', 'penulis' => 'Rika Nur', 'tahun' => 2022],
            ['judul' => 'Desain Database MySQL', 'penulis' => 'Ahmad Rafi', 'tahun' => 2021],
            ['judul' => 'Pemrograman Web Lanjutan', 'penulis' => 'Nur Fadilah', 'tahun' => 2024],
            ['judul' => 'Framework Laravel untuk Pemula', 'penulis' => 'Budi Santoso', 'tahun' => 2023],
        ];


        return view('home', [
            'buku' => $buku,
            'message' => $message
        ]);
    }
}
