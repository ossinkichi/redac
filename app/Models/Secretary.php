<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    protected $table = 'secretariat_employees';

    protected $fillable = [
        'full_name',
        'cpf',
        'gender',
        'date_of_birth',
        'email',
        'phone_number',
        'address',
        'status',
        'created_at',
    ];

    protected $casts = [
        'status' => 'boolean',
        'date_of_birth' => 'date',
    ];

    protected $hidden = [
        'updated_at',
    ];
}
