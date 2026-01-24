<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{

    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'id',
        'series',
        'course',
        'shift',
        'room',
        'created_at'
    ];

    protected $hidden = [
        'updated_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];
}
