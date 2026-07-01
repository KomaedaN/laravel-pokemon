<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('teams/myindex', [TeamController::class, 'myindex'])->middleware(['auth'])->name('teams.myindex');
Route::resource('teams', TeamController::class);

Route::get('/pokemons', [PokemonController::class, 'index'])->name('pokemon.index');
Route::get('/pokemons/create', [PokemonController::class, 'create'])->middleware(['auth'])->name('pokemon.create');
Route::post('/pokemons', [PokemonController::class, 'store'])->middleware(['auth'])->name('pokemon.store');
Route::get('/pokemons/{pokemon}/edit', [PokemonController::class, 'edit'])->middleware(['auth'])->name('pokemon.edit');
Route::put('/pokemons/{pokemon}', [PokemonController::class, 'update'])->middleware(['auth'])->name('pokemon.update');

Route::get('/types', [TypeController::class, 'index'])->name('type.index');
Route::get('/types/create', [TypeController::class, 'create'])->middleware(['auth'])->name('type.create');
Route::post('/types', [TypeController::class, 'store'])->middleware(['auth'])->name('type.store');
Route::get('/types/{type}', [TypeController::class, 'show'])->name('type.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('teams/{team}/pokemons', [TeamController::class, 'addPokemon'])->name('teams.pokemons.add');
    Route::delete('teams/{team}/pokemons/{pokemon}', [TeamController::class, 'removePokemon'])->name('teams.pokemons.remove');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';