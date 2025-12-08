<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = [
        'id',
        'full_name',
        'date_of_birth',
        'email',
        'phone_number',
        'address',
        'discipline_specializate',
        'is_active',
        'created_at'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'date_of_birth' => 'datetime:d-m-Y H:i:s',
    ];

    protected $hidden = [
        'updated_at'
    ];

    protected function discipline()
    {
        return $this->belongsTo(Subject::class, 'discipline_specializate');
    }
}
