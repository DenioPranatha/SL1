<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;
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

Route::get('/', function () {
    return view('welcome', [
        "title" => "Home"
    ]);
});

Route::get('/welcome', function () {
    return view('welcome', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function(){
    return view('profile', [
        "title" => "Profile",
        "cards" => Profile::all()
    ]);
});

Route::get('/services', function(){
    return view('services', [
        "title" => "Services"
    ]);
});