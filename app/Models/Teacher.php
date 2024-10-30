<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function exams()
{
    return $this->hasMany(Exam::class);
}
public function payment()
{
    return $this->hasMany(Payment::class);
}
}