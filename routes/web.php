<?php

use App\Models\Player;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\GiocatoreController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/giocatore/create', [PlayerController::class, 'create'])->name('player.create');
Route::get('/giocatore/index', [PlayerController::class, 'index'])->name('player.index');
Route::get('/giocatore/show/{player}', [PlayerController::class, 'show'])->name('player.show');
Route::get('/giocatore/edit{player}', [PlayerController::class, 'edit'])->name('player.edit');
Route::get('/giocatore/ruolo/{position}', [PlayerController::class, 'filter_role'])->name('player.index_position');
Route::get('/utente', [UserController::class, 'user'])->name('user');

 Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact-us');
 Route::post('/contact-us/submit', [PublicController::class, 'data'])->name('data');
