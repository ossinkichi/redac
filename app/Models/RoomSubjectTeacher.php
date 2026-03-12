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

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
