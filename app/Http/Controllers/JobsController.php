<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(Request $request) {
        return view('pages.users.jobs');
    }
}
