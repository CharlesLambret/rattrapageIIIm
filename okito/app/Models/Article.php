<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =[
        'nom',
        'prix',
        'description',
        'url',
        'updated_at',
        'created_at'
    ];
}