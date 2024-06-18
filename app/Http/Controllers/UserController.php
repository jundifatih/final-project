<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Login(){
        return view('auth.login');
    }

    public function Register(){
        return view('auth.register');
    }

    public function Dashboard(){
        return view('dashboard.user');
    }

    public function DashboardAdmin(){
        return view('dashboard.admin');
    }
    
    public function Profile(){
        // $user = Auth::user();
        // return view('profile.index', compact('user'));
        return view('profile.index');
    
    }
}
