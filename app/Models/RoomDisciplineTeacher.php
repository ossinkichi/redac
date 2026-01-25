<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomDisciplineTeacher extends Model
{

    use HasFactory;

    protected $table = 'romm_discipline_teacher';

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
        return $this->belongsTo(Room::class, 'class_id');
    }

    protected function disciplineId()
    {
        return $this->belongsTo(Subject::class, 'discipline_id');
    }

    protected function teacherId()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
