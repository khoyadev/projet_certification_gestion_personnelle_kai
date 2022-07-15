<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\Note_interne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom_departement'
    ];

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function note_internes()
    {
        return $this->belongsToMany(Note_interne::class);
    }
}
