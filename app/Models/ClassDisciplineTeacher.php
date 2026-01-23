<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassDisciplineTeacher extends Model
{

    use HasFactory;

    protected $table = 'classes_disciplines_teachers';

    protected $fillable = [
        'id',
        'teacher_id',
        'class_id',
        'discipline_id',
        'created_at',
    ];

    protected $hidden = [
        'updated_at'
    ];

    protected function classId()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
