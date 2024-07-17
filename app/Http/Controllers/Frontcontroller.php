<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    public function about()
    {
        $kategori=kategori::all();
        
        return view('habits',compact('kategori'));
    }
     public function feedback()
    {
        return view('feedback');
    }
}
