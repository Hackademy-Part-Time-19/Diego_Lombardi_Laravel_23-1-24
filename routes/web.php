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
})->name('home');


Route::get('/articoli', function () {
    
    $articoli = [['titolo'=> 'SQUAT', 'descrizione'=>'Lo squat è il re degli esercizi per le gambe', 'categoria' =>'Gambe'],
    ['titolo'=> 'PANCA PIANA', 'descrizione'=>'Esercizio focalizzato per il petto con una sua specifica tecnica', 'categoria' =>'Petto'],
    ['titolo'=> 'STACCO', 'descrizione'=>'Fondamentale per costruire una schiena possente', 'categoria' =>'Dorso']];
        

    $titolo1 = 'I FONDAMENTALI';
    return view('articoli', compact('titolo1'),['articoli'=> $articoli]);
})->name('articoli');

//rotta parametrica
Route::get('/articoli/{id}', function($id){

    $articoli = [['titolo'=> 'SQUAT', 'descrizione'=>'Lo squat è il re degli esercizi per le gambe', 'categoria' =>'Gambe'],
    ['titolo'=> 'PANCA PIANA', 'descrizione'=>'Esercizio focalizzato per il petto con una sua specifica tecnica', 'categoria' =>'Petto'],
    ['titolo'=> 'STACCO', 'descrizione'=>'Fondamentale per costruire una schiena possente', 'categoria' =>'Dorso']];

   return view('dettaglio', ['articolo'=> $articoli[$id]]);
})->name('articoli.dettaglio');

Route::get('/chi_sono', function () {
    $titolo2 = 'Chi Sono ?';
    return view('chi_sono', compact('titolo2'));
})->name('contatti');
