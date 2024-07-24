<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    // Display the list of challenges
    public function index()
    {
        $challenges = Challenge::all();
        return view('challenges.index', compact('challenges'));
    }

    public function create()
    {
        // Show form to create a new challenge
        return view('challenges.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'challengeName' => 'required|string|max:255',
        'startDate' => 'required|date',
        'endDate' => 'required|date',
        'duration' => 'required|integer',
        'numQuestions' => 'required|integer',
    ]);

    Challenge::create([
        'challenge_name' => $request->challengeName,
        'start_date' => $request->startDate,
        'end_date' => $request->endDate,
        'duration' => $request->duration,
        'number_of_questions' => $request->numQuestions,
        'status' => 'Active', // or $request->status if provided by the form
    ]);

    return redirect()->route('challenges.index')->with('success', 'Challenge created successfully.');
}


    public function edit($id)
    {
        $challenge = Challenge::findOrFail($id);
        return view('challenges.edit', compact('challenge'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'challengeName' => 'required|string|max:255',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'duration' => 'required|integer',
            'numQuestions' => 'required|integer',
        ]);

        // Map the validated data to the columns in your database
        $challenge = Challenge::findOrFail($id);
        $challenge->challenge_name = $validatedData['challengeName'];
        $challenge->start_date = $validatedData['startDate'];
        $challenge->end_date = $validatedData['endDate'];
        $challenge->duration = $validatedData['duration'];
        $challenge->number_of_questions = $validatedData['numQuestions'];
        $challenge->status = 'Active'; // or any default status
        $challenge->save();

        return redirect()->route('challenges.index')
                         ->with('success', 'Challenge updated successfully');
    }

    public function destroy($id)
    {
        $challenge = Challenge::findOrFail($id);
        $challenge->delete();

        return redirect()->route('challenges.index')
                         ->with('success', 'Challenge deleted successfully');
    }
}
