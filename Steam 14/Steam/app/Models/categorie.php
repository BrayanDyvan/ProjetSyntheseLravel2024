<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $table='categories';
    public function jeux(){
        return $this->belongsToMany(jeu::class);
    }
}
