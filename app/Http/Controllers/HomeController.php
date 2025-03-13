<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //sebelumnya index > diganti invoke
    {
        return 'Selamat Datang';
    }
}