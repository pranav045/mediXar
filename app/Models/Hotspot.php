<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotspot extends Model
{
    protected $fillable = ['anatomy_model_id', 'title', 'description', 'position', 'normal'];
    
    public function anatomyModel() {
        return $this->belongsTo(AnatomyModel::class);
    }
}
