<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'person_id',
        'specialty_id',
        'doctor_id',
        'date',
        'turno_id',
    ];

    protected $casts = [
        'date' => 'date:Y-m-d',
    ];

    
}
