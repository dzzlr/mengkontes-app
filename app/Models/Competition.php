<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'created_at',
        'updated_at',
    ];
}
