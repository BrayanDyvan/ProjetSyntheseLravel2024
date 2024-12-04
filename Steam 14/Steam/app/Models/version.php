<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class version extends Model
{
    
    protected $table='versions';
    protected $fillable=['nom','lien','qualiteVersion','jeu_id'];
    public function jeu(){
        return $this->belongsTo(jeu::class);
    }
}
