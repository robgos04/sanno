<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'newstitle',
        'newscontent',
        'newspic',
        'newsdate',
        'newssource',
        'newslink',
    ];

    public $timestamps = false;

    protected $casts = [
        'newsdate' => 'date',
    ];
}