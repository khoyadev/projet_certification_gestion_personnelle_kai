<?php

namespace App\Models;

use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note_interne extends Model
{
    use HasFactory;

    public function departements()
    {
        return $this->belongsToMany(Departement::class);
    }
}
