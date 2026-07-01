<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;
use App\Models\Pokemon;
use App\Http\Requests\AddPokemonToTeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */



        public function myindex()
    {
        $teams = Team::where('user_id', auth()->id())->get();

        return view('teams.myIndex',  ['teams' => $teams,]);
    }


    public function index()
    {
        $teams = Team::all();

        return view('teams.index',  ['teams' => $teams,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([//verifie les conditions , si pas respecté return une error afficher dans la vue avec @error('name') dans le form
            'name' => 'required|string|max:255',
        ]);

        $team = auth()->user()->teams()->create([
            'name' => $request->name,
        ]);

        return redirect()->route('teams.show', $team);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        $this->authorize('view', $team);

        $team->load('pokemons');
        $allPokemons = Pokemon::all();

        return view('teams.show', compact('team', 'allPokemons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        $this->authorize('update', $team);

        return view('teams.edit', ['team' => $team,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $this->authorize('update', $team);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $team->update(['name' => $request->name]);

        return redirect()->route('teams.show', $team);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $this->authorize('delete', $team);

        $team->delete();

        return redirect()->route('teams.index');
    }

    public function addPokemon(AddPokemonToTeamRequest $request, Team $team)
    {
        $this->authorize('update', $team);

        $team->pokemons()->attach($request->pokemon_id);//ajout une ligne dans la table pivot team_pokemon avec l'id de l'équipe et l'id du pokemon

        return back();
    }
    public function removePokemon(Team $team, int $pivotId)
    {
        $this->authorize('update', $team);

        $team->pokemons()->wherePivot('id', $pivotId)->detach();

        return back()->with('success', 'Pokémon retiré de l\'équipe.');
    }
}
