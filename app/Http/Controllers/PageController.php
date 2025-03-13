<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "NIM: 2341760130, Nama: Rahmalia Cantik banget";
    }

    public function article() {
        return "Halaman Artikel : Jobsheet 2 Pemograman Web Lanjut";
    }

    public function id($id) {
        return "Halaman dengan ID " . $id;
    }
}
