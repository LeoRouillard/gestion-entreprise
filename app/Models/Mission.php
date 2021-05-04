<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    public function organisation() {
        return $this->belongsTo(Organisation::class);
    }

    public function lines() {
        return $this->hasMany(MissionLine::class);
    }
}
