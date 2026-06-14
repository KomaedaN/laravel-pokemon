<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::with('types')->orderBy('pokedex_number')->get();
        return view('pokemons.index', ['pokemons' => $pokemons]); // Avec view doit return le path donc dossier/blade.php (pokemon/index.blade.php)
    }

}
