<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel()
    {
        return view('pages.adminpanel');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');

    }
}
