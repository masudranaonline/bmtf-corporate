<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'feature_image', 
        'short_intro', 
        'description', 
        'date', 
        'status',
    ];

    protected $guarded = ['id'];
}