<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\Type_contrat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contrat extends Model
{
    use HasFactory;

    protected $fillable =[
        'type_contrat',
        'date_entree',
        'date_sortie',
        'salaire',
        'employee_id',
        'type_contrat_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function type_contrat()
    {
        return $this->belongsTo(Type_contrat::class);
    }
}
