<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'specialization',
        'learning_streak',
        'avatar',
        'preferences',
        'plan_type'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'preferences' => 'array'
        ];
    }

    public function quizAttempts() {
        return $this->hasMany(QuizAttempt::class);
    }

    public function viewedModels() {
        return $this->belongsToMany(AnatomyModel::class)->withPivot('last_viewed_at')->orderByDesc('anatomy_model_user.last_viewed_at');
    }
}
