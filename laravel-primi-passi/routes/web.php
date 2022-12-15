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
        "name" => "Laravel",
        "language" => "php",
        "frameworks" => [
            "Bootstrap",
            "Vue js",
            "Laravel"
        ]
    ];
    return view('home', $data);
})->name("home");

Route::get('/services', function () {
    return view('services');
})->name("services");

Route::get('/about', function () {
    return view('about');
})->name("about");
