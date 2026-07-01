<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokemons', [PokemonController::class, 'index'])->name('pokemon.index') ;
Route::get('/pokemons/{pokemon}/edit', [PokemonController::class, 'edit'])->middleware(['auth'])->name('pokemon.edit');
Route::put('/pokemons/{pokemon}', [PokemonController::class, 'update'])->middleware(['auth'])->name('pokemon.update');

Route::get('/types', [TypeController::class, 'index'])->name('type.index') ;
Route::get('/types/create', [TypeController::class, 'create'])->middleware(['auth'])->name('type.create');
Route::post('/types', [TypeController::class, 'store'])->middleware(['auth'])->name('type.store');

Route::get('/pokemons/create', [PokemonController::class, 'create'])->middleware(['auth'])->name('pokemon.create');
Route::post('/pokemons', [PokemonController::class, 'store'])->middleware(['auth'])->name('pokemon.store');
Route::get('/types/{type}', [TypeController::class, 'show'])->name('type.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

