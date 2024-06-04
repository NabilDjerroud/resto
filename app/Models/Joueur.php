<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    protected $fillable = array("nom", "prenom", "date_de_naissance", "poste", "numero", "image");

    public function imageFullPath(){
        return "/storage/$this->image";
    }
}
