<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class professeur extends Model
{
    protected $table='professeurs';
    
    public function usagers(){
        return $this->hasMany(usager::class);
    }
    public function jeux(){
        return $this->hasMany(jeu::class);
    }
}
