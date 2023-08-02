<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCommande extends Model
{
    use HasFactory;

    protected $fillable =[
        'commandes_id',
        'articles_id',
        'updated_at',
        'created_at'
    ];
}