<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index() {
        $quizzes = Quiz::all();
        return view('quiz', compact('quizzes'));
    }

    public function show($id) {
        $quiz = Quiz::with('questions')->findOrFail($id);
        return view('quiz.show', compact('quiz'));
    }

    public function submit(Request $request, $id) {
        $quiz = Quiz::with('questions')->findOrFail($id);
        $score = 0;
        $answers = $request->input('answers', []);

        foreach($quiz->questions as $question) {
            if(isset($answers[$question->id]) && $answers[$question->id] == $question->correct_answer) {
                $score++;
            }
        }

        if(Auth::check()) {
            QuizAttempt::create([
                'user_id' => Auth::id(),
                'quiz_id' => $quiz->id,
                'score' => $score,
                'total_questions' => $quiz->questions->count(),
            ]);
        }

        return redirect()->route('quiz')->with('success', 'Quiz completed! Your score: ' . $score . '/' . $quiz->questions->count());
    }
}
