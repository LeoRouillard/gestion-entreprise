<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    public function missions() {
        return $this->hasMany(Mission::class);
    }

    public function contributions() {
        return $this->hasMany(Contribution::class);
    }
}
