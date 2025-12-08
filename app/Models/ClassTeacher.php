<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassTeacher extends Model
{
    protected $table = 'class_teacher';

    protected $fillable = [
        'id',
        'teacher_id',
        'class_id',
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $hidden = [
        'updated_at'
    ];

    protected function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
