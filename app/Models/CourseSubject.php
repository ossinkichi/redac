<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    use HasFactory;

    protected $table = 'course_subject';

    protected $fillable = [
        'id',
        'course_id',
        'discipline_id',
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $hidden = [
        'updated_at',
    ];

    protected function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    protected function subject()
    {
        return $this->belongsTo(Subject::class, 'discipline_id');
    }
}
