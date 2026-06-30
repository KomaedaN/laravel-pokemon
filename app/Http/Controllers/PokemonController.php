<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\Type;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::with('types')->orderBy('pokedex_number')->get();
        return view('pokemons.index', ['pokemons' => $pokemons]);
    }

    public function create()
    {
        $types = Type::all();
        return view('pokemons.create', ['types' => $types]);
    }

    public function store()
    {
        $pokemon = new Pokemon();
        $pokemon->pokedex_number = request()->pokedex_number;
        $pokemon->name = request()->name;
        $pokemon->sprite = request()->sprite;
        $pokemon->save();

        $pokemon->types()->attach(request()->types ?? []);

        return redirect()->route('pokemon.index');
    }

    public function edit(Pokemon $pokemon)
    {
        $types = Type::all();
        return view('pokemons.edit', ['pokemon' => $pokemon, 'types' => $types]);
    }

    public function update(Pokemon $pokemon)
    {
        $pokemon->pokedex_number = request()->pokedex_number;
        $pokemon->name = request()->name;
        $pokemon->sprite = request()->sprite;
        $pokemon->save();

        $pokemon->types()->sync(request()->types ?? []);

        return redirect()->route('pokemon.index');
    }
}