<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomSubjectTeacher extends Model
{

    use HasFactory;

    protected $table = 'room_subject_teacher';

    protected $fillable = [
        'id',
        'teacher_id',
        'room_id',
        'subject_id',
        'status'
    ];

    protected $hidden = [
        'updated_at'
    ];

    protected function RoomId()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    protected function SubjectId()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    protected function teacherId()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
