<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Beranda(){
        return view('beranda.index');
    }
    public function Test(){
        return view('test.index');
    }
    public function Login(){
        return view('auth.login');
    }
    public function Register(){
        return view('auth.register');
    }
}
