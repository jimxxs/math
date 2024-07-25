<?php

namespace App\Imports;

use App\Models\Answer;
use App\Models\Question; // Import the Question model
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnswersImport implements ToModel, WithHeadingRow
{
    protected $challengeId;

    // public function __construct($challengeId)
    // {
    //     $this->challengeId = $challengeId;
    // }

    public function model(array $row)
    {
        // Validate if question_id exists in questions table
        $question = Question::find($row['question_id']);


        return new Answer([
            'answer_text' => $row['answer_text'],
            'question_id' => $row['question_id']
        ]);
    }
}