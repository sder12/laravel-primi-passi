<?php

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

Route::get('/', function () {
    $data = [
        "title" => "I am main",
        "subtitle" => "This is the main",
        "array" => ["A", "B", "C", "D"]
    ];
    return view('homepage', $data);
})->name("home");

Route::get('about', function () {
    $subtitle  = "I am a subtitle made with compact";
    return view('about', compact("subtitle"));
})->name("about-us");

Route::get('shop', function () {
    return view('shop');
})->name("shopping");
