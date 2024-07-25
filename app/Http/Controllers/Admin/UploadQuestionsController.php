<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Question;
use App\Models\Answer;
use App\Imports\QuestionsImport;
use App\Imports\AnswersImport;


class UploadQuestionsController extends Controller
{
    public function showUploadForm()
    {
        return view('admin.upload-questions');
    }

    public function uploadQuestions(Request $request)
    {
        // Validate the request
        $request->validate([
            'questionsFile' => 'required|file|mimes:xlsx',
            'answersFile' => 'required|file|mimes:xlsx',
        ]);

        // Handle file upload
        $questionsFile = $request->file('questionsFile');
        $answersFile = $request->file('answersFile');

        // Process the files
        Excel::import(new QuestionsImport, $questionsFile);
        Excel::import(new AnswersImport, $answersFile);

        // Redirect or return with a success message
        return redirect()->route('admin.upload-questions')->with('success', 'Files uploaded successfully.');
    }
}
