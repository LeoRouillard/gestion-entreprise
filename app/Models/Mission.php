<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = ['reference', 'organisation_id', 'title', 'deposit', 'ended_at'];

    public function organisation() : BelongsTo {
        return $this->belongsTo(Organisation::class);
    }

    public function lines() : HasMany {
        return $this->hasMany(MissionLine::class);
    }

    public function transactions() : MorphMany {
        return $this->morphMany(Transaction::class, 'source');
    }
}
