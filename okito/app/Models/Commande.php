<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

  public function createWithTable(int $table_id)
{
    $commande = new Commande;
    $commande->table = $table_id;
    $commande->save();

    return response()->json($commande, 201);
}

}