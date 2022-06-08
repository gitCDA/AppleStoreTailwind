<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    //              au singulier car c'est 1 à la fois
    public function formation(){

        return $this->belongsTo(Formation::class) ;
    }
    
}