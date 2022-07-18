<?php

namespace App\Models;

use App\Models\Contrat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type_contrat extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom_typecontrat'
    ];

    public function contrats(){
        return $this->hasMany(Contrat::class);
    }
}
