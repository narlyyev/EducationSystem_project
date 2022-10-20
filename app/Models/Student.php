<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public $timestamps = false;

    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function registration() {
        return $this->belongsTo(Registration::class);
    }
}
