<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model
{
    public $timestamps = false; //sinon le Seeder return une error en essyant d'inserer les column updated_at et created_at

    public function pokemons(): BelongsToMany
    {
        return $this->belongsToMany(Pokemon::class);
    }
}