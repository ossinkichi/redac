<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'id',
        'name',
        'description',
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
    ];

    protected $hidden = [
        'updated_at'
    ];
}
