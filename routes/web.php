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
    
    return view('home', compact('hello'));
})->name('home');

Route::get('/home', function () {

    // Inizializzo delle variabili da mandare alla Homepage
    $hello = 'Hello World!';

    $routesNames = [
        'home',
        'about',
        'contact'
    ];
    
    return view('home', compact('hello', 'routesNames'));
})->name('home');

Route::get('/about', function(){
    $name = 'About Us';

    $routesNames = [
        'home',
        'about',
        'contact'
    ];

    return view('about', compact('name', 'routesNames'));
})->name('about');

Route::get('/contact', function(){
    $name = 'Contact Us';

    $routesNames = [
        'home',
        'about',
        'contact'
    ];

    return view('contact', compact('name', 'routesNames'));
})->name('contact');


