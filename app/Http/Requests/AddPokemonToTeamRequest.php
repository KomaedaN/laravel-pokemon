<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Team;

class AddPokemonToTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array//Laravel valide automatiquement la requête avant même d'entrer dans ta méthode de contrôleur
    {
        return [
            'pokemon_id' => ['required', 'exists:pokemons,id'],
        ];
    }

    public function withValidator($validator): void //C'est un hook en plus des règles simples de rules() 
    {
        $validator->after(function ($validator) { //s'exécute après que les règles de base ont été validées
            $team = $this->route('team');

            if ($team && $team->pokemons()->count() >= 6) {
                $validator->errors()->add('pokemon_id', "L'équipe est déjà complète (6 Pokémon maximum).");
            }
        });
    }
}
