<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'department', 
        'capacity', 
        'upload_date', 
        'application_deadline', 
        'file', 
        'status',
    ];

    protected $guarded = ['id'];
}