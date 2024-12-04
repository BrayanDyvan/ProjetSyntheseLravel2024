<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jeu extends Model
{

    protected $table='jeux';
    protected $fillable=['nom','dateDepot','Resumer','video','image','nbVersion','professeur_id','nbTelechargement','equipe_id','commentaire'];
    
    public function images(){
        return $this->hasMany(image::class,'jeu_id');
    }
    public function versions(){
        return $this->hasMany(version::class);
    }

    public function categories(){
        return $this->belongsToMany(categorie::class);
        
    }
    public function professeur(){
        return $this->belongsTo(professeur::class);
    }
    public function equipe(){
        return $this->belongsTo(equipe::class);
    }
    public function usagers(){
        return $this->belongsToMany(usager::class)->withPivot('commentaire')->withTimestamps();
    }
}
