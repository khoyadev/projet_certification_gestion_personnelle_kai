<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\Type_absence;
use App\Models\demande_conge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conge_absence extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function demande_conge()
    {
        return $this->belongsTo(demande_conge::class);
    }

    public function type_absence()
    {
        return $this->belongsTo(Type_absence::class);
    }
}
