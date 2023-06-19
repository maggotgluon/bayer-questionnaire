<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'ages',
        'answers',
        'result',
        'type',
        'score',
    ];

    protected $casts = [
        'answers' => 'array',
        'created_at' => 'datetime:Y-m-d',
    ];
}
