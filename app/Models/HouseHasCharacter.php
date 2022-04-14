<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseHasCharacter extends Model
{
    protected $table = "house_has_characters";

    public function character()
    {
        return $this->hasMany(Character::class);
    }
}
