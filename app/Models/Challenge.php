<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'challenge_name',
        'start_date',
        'end_date',
        'duration',
        'number_of_questions',
        'status',
    ];
}
