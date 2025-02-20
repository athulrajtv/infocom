<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'number',
        'title',
        'description',
        'rate',
        'discount',
        'duration',
        'eligibility',
        'career',
        'image',
        'status',
    ];
}
