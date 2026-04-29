<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnatomyModel;
use Illuminate\Support\Facades\Auth;

class AnatomyController extends Controller
{
    public function index() {
        $models = AnatomyModel::all();
        return view('anatomy', compact('models'));
    }

    public function show($id) {
        $model = AnatomyModel::with('hotspots')->findOrFail($id);
        return view('anatomy.show', compact('model'));
    }

    public function trackView($id) {
        if(Auth::check()) {
            Auth::user()->viewedModels()->syncWithoutDetaching([$id => ['last_viewed_at' => now()]]);
        }
        return response()->json(['status' => 'success']);
    }
}
