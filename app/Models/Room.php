<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'id',
        'series',
        'course_id',
        'shift',
        'identification',
        'status',
        'created_at'
    ];

    protected $hidden = [
        'updated_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'status' => 'boolean',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
