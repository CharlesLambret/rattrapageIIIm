<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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

    public function commandes() : HasManyThrough
    {
        return $this->hasManyThrough(Commande::class, 'commande_articles');
    }
}