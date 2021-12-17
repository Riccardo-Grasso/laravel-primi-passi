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
    ];
    return view('homepage', $data);
});

Route::get('/fase_1', function () {
    $data = [
        'fase_1' => [
            "Iron Man",
            "L'Incredibile Hulk",
            "Iron Man 2",
            "Thor",
            "Captain America: Il Primo Vendicatore",
            "Avengers"
        ]
    ];
    return view('fase1', $data);
})->name("fase1");

Route::get('/fase_2', function () {
    $data = [
        'fase_2' => [
            "Iron Man 3",
            "Thor: The Dark World ",
            "Captain America: The Winter Soldier",
            "Guardiani della Galassia",
            "Avengers: Age of Ultron ",
            "Ant-Man",
        ]
    ];
    return view('fase2', $data);
})->name("fase2");

Route::get('/fase_3', function () {
    $data = [
        'fase_3' => [
            "Captain America: Civil War",
            "Doctor Strange",
            "Guardiani della Galassia Vol. 2",
            "Spider-Man: Homecoming",
            "Thor: Ragnarok",
            "Black Panther",
            "Ant-Man and the Wasp ",
            "Avengers: Infinity War ",
            "Captain Marvel ",
            "Avengers: Endgame",
            "Spider-Man: Far From Home",
        ]
    ];
    return view('fase3', $data);
})->name("fase3");

Route::get('/fase_4', function () {
    $data = [
        'fase_4' => [
            "Wanda Vision ",
            "The Falcon and the Winter Soldier",
            "Loki ",
            "Black Widow ",
            "What If… ",
            "Shang-Chi e la Leggenda dei Dieci Anelli ",
            "Eternals",
            "Hawkeye",
            "Spider-Man: No Way Home",
        ]
    ];
    return view('fase4', $data);
})->name("fase4");
