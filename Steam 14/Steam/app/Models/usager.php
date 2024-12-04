<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class usager extends Authenticatable
{

    use HasFactory,Notifiable;
    protected $table='usagers';
    protected $fillable=['nom','prenom','matricule','password','email','avatar','equipe_id','professeur_id','role','commentaire'];
    
    public function equipe(){
        return $this->belongsTo(equipe::class);
    }
    public function etudiant(){
            return $this->belongsTo(etudiant::class);
    }

    public function professeur(){
        return $this->belongsTo(professeur::class);
    }
    public function jeux() {
            return $this->belongsToMany(jeu::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
