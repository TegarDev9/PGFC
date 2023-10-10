<?php

namespace App\Http\Controllers;

use App\Models\Grub;
use Illuminate\Http\Request;

class GrubController extends Controller
{
Public function view(){
    $Grub = Grub::all();
    return view('Grub', ['Grub' => $Grub]);
}
    public function index(Request $request)
    {
        return view('Grub');
    }
}
