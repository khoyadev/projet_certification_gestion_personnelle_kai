<?php

namespace App\Models;

use App\Models\Avertissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sanction extends Model
{
    use HasFactory;

    public function avertissements(){
        return $this->hasMany(Avertissement::class);
    }
}
