<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaganController extends Controller
{
    public function view(Request $request)
    {
        return view('Bagan');
    }
}
