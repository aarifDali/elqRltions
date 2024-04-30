<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function cities() {

        return $this->belongsToMany(City::class, 'cities_stores', 'stores_id', 'cities_id');

    }
}
