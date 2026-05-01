<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnatomyModel extends Model
{
    protected $fillable = ['title', 'description', 'file_path', 'category', 'thumbnail', 'is_premium', 'scientific_name', 'functions', 'clinical_note'];

    protected $casts = [
        'functions' => 'array',
    ];

    public function hotspots() {
        return $this->hasMany(Hotspot::class);
    }

    public function viewers() {
        return $this->belongsToMany(User::class);
    }
}
