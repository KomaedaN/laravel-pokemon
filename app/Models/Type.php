<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = false; //sinon le Seeder return une error en essyant d'inserer les column updated_at et created_at
}
