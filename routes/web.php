<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $users = [
        [
            "name" => "John",
            "age" => 36,
        ],
        [
            "name" => "Tom",
            "age" => 26,
        ],
        [
            "name" => "Harry",
            "age" => 35,
        ],
        [
            "name" => "Sam",
            "age" => 25,
        ],

    ];

    return view('about',['users' => $users]);
});
