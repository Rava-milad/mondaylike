<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function panel()
    {
        return view('pages.adminpanel');
    }
    
    public function logout()
    {
        
        Auth::logout();
        return redirect('/');

    }
}
