<?php

namespace App\Models;

use App\Models\projet;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compte_rendu_activite extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }


    public function projet()
    {
        return $this->belongsTo(projet::class);
    }
}
