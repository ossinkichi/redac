<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = [
        'teacher_id',
        'subject_id',
        'room_id',
        'title',
        'description',
        'links',
        'file',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }
}
