<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory;

    protected $fillable =[
        'table',
        'updated_at',
        'created_at'
    ];

    public function articles() : HasMany
    {
        return $this->hasMany(Article::class);
    }
}