<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Identify extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
