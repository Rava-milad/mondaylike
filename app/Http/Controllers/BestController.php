<?php

namespace App\Http\Controllers;

use App\Models\Panel\Best;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BestController extends Controller
{
    public function catch(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'group_title' => 'required',
            'numbers' => 'required',
            'date' => 'required'
        ])->validated();
        Best::create([
            'group_title' => $validation['group_title'],
            'numbers' => $validation['numbers'],
            'date' => $validation['date']
        ]);
        return redirect()->back()->with('alert' , 'your data save successfully');
    }
    public function show()
    {
        return view('pages.adminpanel' , [
            'workspace' => Best::all()
        ]);
    }
    public function remove(Best $workspace)
    {
        $workspace->delete();
        return back();
    }
}
