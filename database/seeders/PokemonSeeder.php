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
            ['pokedex_number' => 1,  'name' => 'Bulbizarre', 'types' => [4, 8]],
            ['pokedex_number' => 2,  'name' => 'Herbizarre', 'types' => [4, 8]],
            ['pokedex_number' => 3,  'name' => 'Florizarre', 'types' => [4, 8]],
            ['pokedex_number' => 4,  'name' => 'Salamèche',  'types' => [2]],
            ['pokedex_number' => 5,  'name' => 'Reptincel',  'types' => [2]],
            ['pokedex_number' => 6,  'name' => 'Dracaufeu',  'types' => [2, 10]],
            ['pokedex_number' => 7,  'name' => 'Carapuce',   'types' => [3]],
            ['pokedex_number' => 8,  'name' => 'Carabaffe',  'types' => [3]],
            ['pokedex_number' => 9,  'name' => 'Tortank',    'types' => [3]],
            ['pokedex_number' => 10, 'name' => 'Chenipan',   'types' => [12]],
            ['pokedex_number' => 11, 'name' => 'Chrysacier', 'types' => [12]],
            ['pokedex_number' => 12, 'name' => 'Papilusion', 'types' => [12, 10]],
            ['pokedex_number' => 13, 'name' => 'Aspicot',    'types' => [12, 8]],
            ['pokedex_number' => 14, 'name' => 'Coconfort',  'types' => [12, 8]],
            ['pokedex_number' => 15, 'name' => 'Dardargnan', 'types' => [12, 8]],
            ['pokedex_number' => 16, 'name' => 'Roucool',    'types' => [1, 10]],
            ['pokedex_number' => 17, 'name' => 'Roucoups',   'types' => [1, 10]],
            ['pokedex_number' => 18, 'name' => 'Roucarnage', 'types' => [1, 10]],
            ['pokedex_number' => 19, 'name' => 'Rattata',    'types' => [1]],
            ['pokedex_number' => 20, 'name' => 'Rattatac',   'types' => [1]],
            ['pokedex_number' => 21, 'name' => 'Piafabec',   'types' => [1, 10]],
            ['pokedex_number' => 22, 'name' => 'Rapasdepic', 'types' => [1, 10]],
            ['pokedex_number' => 23, 'name' => 'Abo',        'types' => [8]],
            ['pokedex_number' => 24, 'name' => 'Arbok',      'types' => [8]],
            ['pokedex_number' => 25, 'name' => 'Pikachu',    'types' => [5]],
            ['pokedex_number' => 26, 'name' => 'Raichu',     'types' => [5]],
            ['pokedex_number' => 27, 'name' => 'Sabelette',  'types' => [9]],
            ['pokedex_number' => 28, 'name' => 'Sablaireau', 'types' => [9]],
            ['pokedex_number' => 29, 'name' => 'Nidoran♀',   'types' => [8]],
            ['pokedex_number' => 30, 'name' => 'Nidorina',   'types' => [8]],
            ['pokedex_number' => 31, 'name' => 'Nidoqueen',  'types' => [8, 9]],
            ['pokedex_number' => 32, 'name' => 'Nidoran♂',   'types' => [8]],
            ['pokedex_number' => 33, 'name' => 'Nidorino',   'types' => [8]],
            ['pokedex_number' => 34, 'name' => 'Nidoking',   'types' => [8, 9]],
            ['pokedex_number' => 35, 'name' => 'Mélofée',    'types' => [18]],
            ['pokedex_number' => 36, 'name' => 'Mélodelfe',  'types' => [18]],
            ['pokedex_number' => 37, 'name' => 'Goupix',     'types' => [2]],
            ['pokedex_number' => 38, 'name' => 'Feunard',    'types' => [2]],
            ['pokedex_number' => 39, 'name' => 'Rondoudou',  'types' => [1, 18]],
            ['pokedex_number' => 40, 'name' => 'Grodoudou',  'types' => [1, 18]],
            ['pokedex_number' => 41, 'name' => 'Nosferapti', 'types' => [8, 10]],
            ['pokedex_number' => 42, 'name' => 'Nosferalto', 'types' => [8, 10]],
            ['pokedex_number' => 43, 'name' => 'Mystherbe',  'types' => [4, 8]],
            ['pokedex_number' => 44, 'name' => 'Ortide',     'types' => [4, 8]],
            ['pokedex_number' => 45, 'name' => 'Rafflesia',  'types' => [4, 8]],
            ['pokedex_number' => 46, 'name' => 'Paras',      'types' => [12, 4]],
            ['pokedex_number' => 47, 'name' => 'Parasect',   'types' => [12, 4]],
            ['pokedex_number' => 48, 'name' => 'Mimitoss',   'types' => [12, 8]],
            ['pokedex_number' => 49, 'name' => 'Aéromite',   'types' => [12, 8]],
            ['pokedex_number' => 50, 'name' => 'Taupiqueur', 'types' => [9]],
        ];

        foreach ($pokemons as $data) {
            $pokemon = Pokemon::create([
                'pokedex_number' => $data['pokedex_number'],
                'name'           => $data['name'],
                'sprite'         => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$data['pokedex_number']}.png",
            ]);

            $pokemon->types()->attach($data['types']);
        }
    }
}
