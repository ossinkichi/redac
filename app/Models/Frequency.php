<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    use HasFactory;

    protected $table = 'frequency';

    protected $fillable = [
        'id',
        'student_registration_number',
        'teacher_id',
        'discipline_id',
        'class_id',
        'presence',
        'created_at',
    ];

    protected $hidden = [
        'updated_at'
    ];

    protected function student()
    {
        return $this->belongsTo(Student::class, 'student_registration_number', 'registration');
    }

    protected function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    protected function discipline()
    {
        return $this->belongsTo(Subject::class, 'discipline_id');
    }

    protected function classId()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
