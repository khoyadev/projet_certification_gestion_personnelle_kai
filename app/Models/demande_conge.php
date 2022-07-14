<?php

namespace App\Models;

use App\Models\Conge_absence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class demande_conge extends Model
{
    use HasFactory;

    public function conge_absences(){
        return $this->hasMany(Conge_absence::class);
    }    
}
