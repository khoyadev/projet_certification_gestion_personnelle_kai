<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fonction extends Model
{
    use HasFactory;

    protected $fillable =[
        'nom_fonction'
    ];
    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
