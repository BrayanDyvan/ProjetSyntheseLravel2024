<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table='images';

    protected $fillable=['nom','lien','jeu_id'];
    public function jeu(){
        return $this->belongsTo(jeu::class);
    }
}
