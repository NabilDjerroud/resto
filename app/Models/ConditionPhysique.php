<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionPhysique extends Model
{
    use HasFactory;

    public function joueur(){
        return $this->hasMany(Joueur::class);
    }
}
