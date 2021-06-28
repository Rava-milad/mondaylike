<?php

namespace App\Http\Controllers;

use App\Models\Panel\Best;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
