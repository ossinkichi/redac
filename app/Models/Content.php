<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'contents';

    protected $fillable = [
        'id',
        'teacher_id',
        'discipline_id',
        'class_id',
        'content',
        'created_at',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function discipline()
    {
        return $this->belongsTo(Subject::class, 'discipline_id');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
