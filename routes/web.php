<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactsController;
use App\http\Controllers\MailController;

use Illuminate\Support\Facades\Route;

Route::get('/home', [PageController::class, 'homepage'])->name('home');

Route::get('/articoli', [ArticleController::class, 'index'])->name('articoli');

// Utilizza vincoli per il parametro {id} per accettare solo numeri
Route::get('/articoli/{id}', [ArticleController::class, 'show'])->where('id', '[0-9]+')->name('articoli.dettaglio');

Route::get('/contatti', [ContactsController::class, 'contacts'])->name('contatti');

Route::get('/articoli/{categoria}', [ArticleController::class, 'byCategory'])->where('categoria', '[A-Za-z]+')->name('articoli.bycategory');

//rotte post 

Route::post('/contatti/invio',[MailController::class, 'sendContact'])->name('contact.send');

// creazione modello di test
Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');

Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');