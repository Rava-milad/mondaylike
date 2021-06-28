<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/logout' , 'AdminController@logout');
Route::get('/' , function() {
    return view('pages.home');
});
Route::get('/test', function(){
    return view('welcome');
});
// Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::prefix('/admin')->middleware('auth')->group(function(){
    Route::get('/panel' , 'AdminController@panel');
    Route::post('/panel' , 'BestController@catch');
    Route::get('/panel' , 'BestController@show');
    Route::delete('/panel/{workspace}' , 'BestController@remove');
});

