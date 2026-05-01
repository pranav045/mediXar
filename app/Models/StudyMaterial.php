<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyMaterial extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'content', 'category', 'thumbnail', 'read_time', 'is_premium'];
}
