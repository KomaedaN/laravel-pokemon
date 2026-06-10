<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pokemons = [
            ['pokedex_number' => 1,  'name' => 'Bulbizarre'],
            ['pokedex_number' => 2,  'name' => 'Herbizarre'],
            ['pokedex_number' => 3,  'name' => 'Florizarre'],
            ['pokedex_number' => 4,  'name' => 'Salamèche'],
            ['pokedex_number' => 5,  'name' => 'Reptincel'],
            ['pokedex_number' => 6,  'name' => 'Dracaufeu'],
            ['pokedex_number' => 7,  'name' => 'Carapuce'],
            ['pokedex_number' => 8,  'name' => 'Carabaffe'],
            ['pokedex_number' => 9,  'name' => 'Tortank'],
            ['pokedex_number' => 10, 'name' => 'Chenipan'],
            ['pokedex_number' => 11, 'name' => 'Chrysacier'],
            ['pokedex_number' => 12, 'name' => 'Papilusion'],
            ['pokedex_number' => 13, 'name' => 'Aspicot'],
            ['pokedex_number' => 14, 'name' => 'Coconfort'],
            ['pokedex_number' => 15, 'name' => 'Dardargnan'],
            ['pokedex_number' => 16, 'name' => 'Roucool'],
            ['pokedex_number' => 17, 'name' => 'Roucoups'],
            ['pokedex_number' => 18, 'name' => 'Roucarnage'],
            ['pokedex_number' => 19, 'name' => 'Rattata'],
            ['pokedex_number' => 20, 'name' => 'Rattatac'],
            ['pokedex_number' => 21, 'name' => 'Piafabec'],
            ['pokedex_number' => 22, 'name' => 'Rapasdepic'],
            ['pokedex_number' => 23, 'name' => 'Abo'],
            ['pokedex_number' => 24, 'name' => 'Arbok'],
            ['pokedex_number' => 25, 'name' => 'Pikachu'],
            ['pokedex_number' => 26, 'name' => 'Raichu'],
            ['pokedex_number' => 27, 'name' => 'Sabelette'],
            ['pokedex_number' => 28, 'name' => 'Sablaireau'],
            ['pokedex_number' => 29, 'name' => 'Nidoran♀'],
            ['pokedex_number' => 30, 'name' => 'Nidorina'],
            ['pokedex_number' => 31, 'name' => 'Nidoqueen'],
            ['pokedex_number' => 32, 'name' => 'Nidoran♂'],
            ['pokedex_number' => 33, 'name' => 'Nidorino'],
            ['pokedex_number' => 34, 'name' => 'Nidoking'],
            ['pokedex_number' => 35, 'name' => 'Mélofée'],
            ['pokedex_number' => 36, 'name' => 'Mélodelfe'],
            ['pokedex_number' => 37, 'name' => 'Goupix'],
            ['pokedex_number' => 38, 'name' => 'Feunard'],
            ['pokedex_number' => 39, 'name' => 'Rondoudou'],
            ['pokedex_number' => 40, 'name' => 'Grodoudou'],
            ['pokedex_number' => 41, 'name' => 'Nosferapti'],
            ['pokedex_number' => 42, 'name' => 'Nosferalto'],
            ['pokedex_number' => 43, 'name' => 'Mystherbe'],
            ['pokedex_number' => 44, 'name' => 'Ortide'],
            ['pokedex_number' => 45, 'name' => 'Rafflesia'],
            ['pokedex_number' => 46, 'name' => 'Paras'],
            ['pokedex_number' => 47, 'name' => 'Parasect'],
            ['pokedex_number' => 48, 'name' => 'Mimitoss'],
            ['pokedex_number' => 49, 'name' => 'Aéromite'],
            ['pokedex_number' => 50, 'name' => 'Taupiqueur'],
        ];

        foreach ($pokemons as $pokemon) {
            Pokemon::create([
                'pokedex_number' => $pokemon['pokedex_number'],
                'name'           => $pokemon['name'],
                'sprite'         => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$pokemon['pokedex_number']}.png",
            ]);
        }
    }
}
