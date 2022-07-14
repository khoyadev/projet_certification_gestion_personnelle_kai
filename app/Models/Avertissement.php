<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\Sanction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avertissement extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function sanction()
    {
        return $this->belongsTo(Sanction::class);
    }
}
