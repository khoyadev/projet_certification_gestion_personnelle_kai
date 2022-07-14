<?php

namespace App\Models;

use App\Models\Compte_rendu_activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class projet extends Model
{
    use HasFactory;

    public function compte_rendu_activites(){
        return $this->hasMany(Compte_rendu_activite::class);
    }
}
