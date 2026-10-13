<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Selamat Datang di Portal Tugas Web',
            'deskripsi' => 'Aplikasi web sederhana berbasis framework Laravel 11 untuk tugas pertemuan 9.',
            'fitur' => [
                'Routing kustom menggunakan Blade view',
                'Pengiriman data array dinamis dari controller',
                'Integrasi model dan migrasi database MySQL',
                'Desain antarmuka rapi dengan Tailwind CSS CDN'
            ]
        ];

        return view('welcome', $data);
    }

    public function about()
    {
        $profil = [
            'nama_aplikasi' => 'Portal Mahasiswa TugasWeb',
            'semester' => 'Semester 4',
            'mata_kuliah' => 'Pemrograman Web Lanjut',
            'teknologi' => [
                'PHP 8.2+',
                'Laravel Framework',
                'Blade Templating Engine',
                'MySQL Database'
            ],
            'pengembang' => [
                'nama' => 'Junior Developer',
                'status' => 'Mahasiswa Teknik Informatika'
            ]
        ];

        return view('about', compact('profil'));
    }

    public function contact()
    {
        $kontak = [
            'email' => 'tugas.web@kampus.ac.id',
            'telepon' => '0812-3456-7890',
            'alamat' => 'Gedung Fakultas Ilmu Komputer, Kampus Utama',
            'jam_layanan' => 'Senin - Jumat, 08.00 - 16.00 WIB'
        ];

        return view('contact', compact('kontak'));
    }

    public function hello($nama)
    {
        return view('hello', ['nama' => $nama]);
    }
}
