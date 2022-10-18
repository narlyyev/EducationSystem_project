<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function student() {
        return $this->hasMany(Student::class);
    }
}
