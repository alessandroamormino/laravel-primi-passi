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

    // Inizializzo delle variabili da mandare alla Homepage
    $hello = 'Hello World!';

    $names = [
        'Alessandro',
        'Marco',
        'Mario',
        'Luigi',
        'Luca'
    ];

    return view('home', compact('hello', 'names'));
});


