<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Mission extends Model
{
    use HasFactory;

    public function organisation() {
        return $this->belongsTo(Organisation::class);
    }

    public function lines() {
        return $this->hasMany(MissionLine::class);
    }

    public function transactions() : MorphMany {
        return $this->morphMany(Transaction::class, 'source');
    }
}
