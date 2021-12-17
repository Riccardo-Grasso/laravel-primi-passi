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
        'film' => 'FILM MCU',
        'fase_1' => [
            "Iron Man",
            "L'Incredibile Hulk",
            "Iron Man 2",
            "Thor",
            "Captain America: Il Primo Vendicatore",
            "Avengers"
        ]
    ];
    return view('homepage', $data);
});
