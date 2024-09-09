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

    // Dichiarazione Variabile titolo;
    $titol = 'Hello Word';

    //Dichiarazione Variabile per elenco informazioni;
    $info = [
        'name' => 'Samuele',
        'surname' => 'Tasciotti',
        'adress' => 'Rome - Italy',
        'age' => 24,
    ];

    // Return
    return view('home-page', compact('titol', 'info'));
});
