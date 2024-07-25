<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionsImport implements ToModel, WithHeadingRow
{
    use Importable;


    public function model(array $row)
    {
        // Ensure the question is correctly associated with the challenge
        return new Question([
            'id' => $row['question_id'] ?? null, // Ensure 'question_text' is populated
            'question_text' => $row['text'] ?? null,
            'marks' => $row['marks'] ?? null,
            'challenge_id' => $row['challenge_id'] ?? null,
        ]);
    }
}