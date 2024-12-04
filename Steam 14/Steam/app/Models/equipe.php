<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class equipe extends Model
{
    protected $table='equipes';
    protected $fillable=['nom'];

    public function usagers(){
        return $this->hasMany(usager::class);
    }

    public function jeux(){
        return $this->hasMany(jeu::class);
    }
}
