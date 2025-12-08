<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'registration',
        'full_name',
        'date_of_birth',
        'address',
        'email',
        'phone_number',
        'course_id',
        'class_id',
        'is_active',
        'created_at',

    ];

    protected $casts = [
        'date_of_birth' => 'datetime:d-m-Y H:i:s',
        'is_active' => 'boolean'
    ];

    protected $hidden = [
        'id',
        'updated_at'
    ];

    protected function studentCourse()
    {
        return $this->belongsTo(Course::class);
    }

    protected function studentClass()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
