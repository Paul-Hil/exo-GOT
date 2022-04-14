<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{

    protected $table = "title";

    public function character()
    {
        return $this->hasMany(Character::class, 'character');
    }
}
