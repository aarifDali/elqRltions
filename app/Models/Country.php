<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function states() {
        return $this->hasMany(State::class, 'country_id', 'id');
    }

    
    public function regions() {
        return $this->hasManyThrough(Region::class, State::class);
    }
}
