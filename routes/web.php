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

    $navLinks = [
        'Home',
        'About Us',
        'Contact Us'        
    ];
    
    return view('home', compact('hello', 'navLinks'));
})->name('home');

Route::get('/home', function () {

    // Inizializzo delle variabili da mandare alla Homepage
    $hello = 'Hello World!';

    $navLinks = [
        'Home',
        'About Us',
        'Contact Us'        
    ];
    
    return view('home', compact('hello', 'navLinks'));
})->name('home');

Route::get('/about', function(){
    $name = 'About Us';


    return view('about', compact('name'));
})->name('about');

Route::get('/contact', function(){
    $name = 'Contact Us';


    return view('contact', compact('name'));
})->name('contact');


