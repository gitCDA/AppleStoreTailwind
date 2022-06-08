<?php

namespace App\Models;

use App\Models\Stagiaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;

        //              au pluriel car c'est plusieurs à la fois
    public function stagiaires(){

        return $this->hasMany(Stagiaire::class) ;
    }
}