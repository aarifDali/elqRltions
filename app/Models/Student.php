<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function result() {
        return $this->hasOne(Result::class, 'student_id', 'id');
    } 
}
