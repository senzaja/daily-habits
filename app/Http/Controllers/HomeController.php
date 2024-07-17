<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->isAdmin == 1) {
            $user = user::count();
            $kategori = kategori::count();
            $feedback =  feedback::count();
            return view('index', compact('user', 'kategori', 'feedback'));
        } else {
            $user = user::all();
            $kategori = Kategori::all();
            $feedback = feedback::all();
            return view('welcome', compact('user', 'kategori', 'feedback'));

            return view('index');
        }
    }
}
