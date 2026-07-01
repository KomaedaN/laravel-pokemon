<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }

    public function teams()
    {
    return $this->belongsToMany(Team::class, 'pokemon_team')
                ->withTimestamps();
    }
}
