<?php
namespace App\Http\Controllers;
use App\Models\Pokemon;
use App\Models\Type;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', ['pokemons' => $pokemons]); //Avec view doit return le path donc dossie/blade.php (pokemon/index.blade.php)
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
}