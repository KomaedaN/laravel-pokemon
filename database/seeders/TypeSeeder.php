<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Normal',   'color' => '#A8A878'],
            ['name' => 'Feu',      'color' => '#F08030'],
            ['name' => 'Eau',      'color' => '#6890F0'],
            ['name' => 'Plante',   'color' => '#78C850'],
            ['name' => 'Électrik', 'color' => '#F8D030'],
            ['name' => 'Glace',    'color' => '#98D8D8'],
            ['name' => 'Combat',   'color' => '#C03028'],
            ['name' => 'Poison',   'color' => '#A040A0'],
            ['name' => 'Sol',      'color' => '#E0C068'],
            ['name' => 'Vol',      'color' => '#A890F0'],
            ['name' => 'Psy',      'color' => '#F85888'],
            ['name' => 'Insecte',  'color' => '#A8B820'],
            ['name' => 'Roche',    'color' => '#B8A038'],
            ['name' => 'Spectre',  'color' => '#705898'],
            ['name' => 'Dragon',   'color' => '#7038F8'],
            ['name' => 'Ténèbres', 'color' => '#705848'],
            ['name' => 'Acier',    'color' => '#B8B8D0'],
            ['name' => 'Fée',      'color' => '#EE99AC'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
