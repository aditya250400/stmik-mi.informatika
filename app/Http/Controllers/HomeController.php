<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
   
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

   
    public function index()
    {
        $users = User::all();
        return view('home');
    }

    public function ukm() {
        return view('stmik.ukm');
    }

    public function tentang() {
        return view('stmik.tentang');
    }

    
   
}