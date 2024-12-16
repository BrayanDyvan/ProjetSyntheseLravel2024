<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    protected $table='etudiants';
    protected $fillable=['session','usager_id'];
    
}
