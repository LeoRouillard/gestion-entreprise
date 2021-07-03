<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MissionLine extends Model
{
    use HasFactory;

    public function mission() : BelongsTo {
        return $this->belongsTo(Mission::class);
    }
}