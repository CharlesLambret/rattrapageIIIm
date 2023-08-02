<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlesCommandes extends Model
{
    use HasFactory;

    protected $fillable =[
        'commandes_id',
        'articles_id',
    ];
}