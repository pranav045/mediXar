<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $recentModels = $user->viewedModels()->limit(3)->get();
        $recentQuizzes = $user->quizAttempts()->with('quiz')->latest()->limit(5)->get();
        
        return view('dashboard', compact('user', 'recentModels', 'recentQuizzes'));
    }
}
