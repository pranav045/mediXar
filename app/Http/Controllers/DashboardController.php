<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\AnatomyModel;
use App\Models\StudyMaterial;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $recentModels = $user->viewedModels()->limit(3)->get();
        $recentQuizzes = $user->quizAttempts()->with('quiz')->latest()->limit(5)->get();
        $recommendedModels = AnatomyModel::inRandomOrder()->limit(6)->get();
        $studyMaterials = StudyMaterial::inRandomOrder()->limit(4)->get();
        
        return view('dashboard', compact('user', 'recentModels', 'recentQuizzes', 'recommendedModels', 'studyMaterials'));
    }
}
