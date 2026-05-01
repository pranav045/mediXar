<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StudyMaterial;

class StudyMaterialController extends Controller
{
    public function show($slug)
    {
        $material = StudyMaterial::where('slug', $slug)->firstOrFail();
        return view('library.show', compact('material'));
    }
}
