<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentResponse extends Model
{
    use HasFactory;

    protected $table = 'content_response';

    protected $fillable = [
        'id',
        'student_resgistration_number',
        'content_id',
        'response',
        'created_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_resgistration_number', 'registration');
    }
}
