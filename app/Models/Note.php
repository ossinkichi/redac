<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';

    protected $fillable = [
        'id',
        'student_registration_number',
        'class_id',
        'discipline_id',
        'note',
        'unit',
        'created_at',
    ];

    protected $hidden = [
        'updated_at'
    ];

    protected function student()
    {
        return $this->belongsTo(Student::class, 'student_registration_number', 'registration');
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
