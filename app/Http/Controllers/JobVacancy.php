<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobVacancy extends Controller
{
    /**
     * Fungsi untuk render halaman buat lowongan
     *
     * @return void
     */
    public function index()
    {
        return view('pages.users.buat-lowongan');
    }
}
