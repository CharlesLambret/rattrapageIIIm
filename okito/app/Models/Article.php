<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function commande() : HasOne
    {
        return $this->hasOne(Commande::class);
    }
}