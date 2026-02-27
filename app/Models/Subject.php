<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
