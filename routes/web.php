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

Route::get('/home', function () {
    $titolo = 'COMBO_FIT';
    return view('home', compact('titolo'));
});


Route::get('/articoli', function () {
    $titolo1 = 'Come Eseguire Lo Squat';
    return view('articoli', compact('titolo1'));
});

Route::get('/chi_sono', function () {
    $titolo2 = 'Chi Sono ?';
    return view('chi_sono', compact('titolo2'));
});
