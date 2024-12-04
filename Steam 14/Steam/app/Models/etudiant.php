<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    protected $table='etudiants';
    public function usager(){
        return $this->belongsTo(usager::class);
    }
}
