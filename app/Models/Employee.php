<?php

namespace App\Models;

use App\Models\Contrat;
use App\Models\Fonction;
use App\Models\Pointage;
use App\Models\Departement;
use App\Models\Avertissement;
use App\Models\Conge_absence;
use App\Models\Compte_rendu_activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function fonction()
    {
        return $this->belongsTo(Fonction::class);
    }

    public function contrats(){
        return $this->hasMany(Contrat::class);
    }

    public function avertissements(){
        return $this->hasMany(Avertissement::class);
    }

    public function compte_rendu_activites(){
        return $this->hasMany(Compte_rendu_activite::class);
    }

    public function pointages(){
        return $this->hasMany(Pointage::class);
    }

    public function conge_absences(){
        return $this->hasMany(Conge_absence::class);
    }
}
