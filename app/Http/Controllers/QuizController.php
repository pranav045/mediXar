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
        $results = [];

        foreach($quiz->questions as $question) {
            $userAnswer = $answers[$question->id] ?? null;
            $isCorrect = $userAnswer == $question->correct_answer;
            if($isCorrect) {
                $score++;
            }
            $results[] = [
                'question' => $question->question_text,
                'user_answer' => $userAnswer,
                'correct_answer' => $question->correct_answer,
                'is_correct' => $isCorrect,
                'options' => $question->options
            ];
        }

        $attempt = null;
        if(Auth::check()) {
            $attempt = QuizAttempt::create([
                'user_id' => Auth::id(),
                'quiz_id' => $quiz->id,
                'score' => $score,
                'total_questions' => $quiz->questions->count(),
            ]);
        }

        return view('quiz.result', [
            'quiz' => $quiz,
            'score' => $score,
            'total' => $quiz->questions->count(),
            'results' => $results,
            'attempt' => $attempt
        ]);
    }
}
