<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "NIM: 2031710001 <br>
         Nama: Raviansyah Yudistira Pratama";
    }

    public function articles($id) {
        return "Halaman Artikel dengan Id '$id'";
    }
}
