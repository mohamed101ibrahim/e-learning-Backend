<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    public function teacher()
{
    return $this->belongsTo(Teacher::class);
}

public function chapter()
{
    return $this->belongsTo(Chapter::class);
}

public function student()
{
    return $this->belongsTo(Student::class);
}
}