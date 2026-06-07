<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';
    protected $fillable = [
        'careername',
        'careerdesc',
        'careerrspec',
        'careerbenefit',
        'careerdate',
    ];

    // Tell Laravel the exact column names since we're not using default timestamps
    public $timestamps = false;

    protected $casts = [
        'careerdate' => 'date',
    ];
}