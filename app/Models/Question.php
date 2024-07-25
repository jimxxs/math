<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        //'id',
        'question_text',
        'marks',
        'challenge_id',
    ];

    // Define any relationships if needed
    // public function answers() {
    //     return $this->hasMany(Answer::class);
    // }
}
