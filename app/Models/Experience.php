<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'role',
        'company_or_school',
        'description',
        'start_date',
        'end_date',
        'type',
    ];
}