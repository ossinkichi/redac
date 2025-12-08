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
        'shift',
        'room',
        'created_at'
    ];

    protected $hidden = [
        'updated_at'
    ];
}
