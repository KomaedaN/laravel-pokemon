<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('types.index', ['types' => $types]); // Avec view doit return le path donc dossier/blade.php (types/index.blade.php)
    }

    public function create()
    {
        return view('types.create');
    }

    public function store()
    {
        $type = new Type();
        $type->name = request()->name;
        $type->color = request()->color;
        $type->save();

        return redirect()->route('type.index'); // Avec redirect -> route on se base sur le nom de la route
    }

    public function show(Type $type)
{
    $pokemons = $type->pokemons;
    return view('types.show', ['type' => $type, 'pokemons' => $pokemons]);
}
}
