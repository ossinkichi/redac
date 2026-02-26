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
        'cpf',
        'date_of_birth',
        'address',
        'email',
        'gender',
        'phone_number',
        'course_id',
        'room_id',
        'is_active',
        'created_at',
    ];

    protected $casts = [
        'date_of_birth' => 'datetime:d-m-Y H:i:s',
        'created_at' => 'datetime:d-m-Y H:i:s',
        'is_active' => 'boolean'
    ];

    protected $hidden = [
        'id',
        'updated_at'
    ];

    protected function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    protected function studentClass()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
