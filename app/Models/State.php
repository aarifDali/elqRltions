<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function country() {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function regions() {
        return $this->hasMany(Region::class, 'state_id', 'id');
    }
}
