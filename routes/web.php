<?php

use App\Http\Controllers\GiocatoreController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PublicController;
use App\Models\Player;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/giocatore/create', [PlayerController::class, 'create'])->name('player.create');
