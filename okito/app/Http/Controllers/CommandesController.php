<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::all();
        return view('commandes.index', compact('commandes'));
    }

    public function create()
    {
        return view('commandes.create');
    }
    
    public function createWithTable(int $table_id)
{
    $commande = Commande::create(['table' => $table_id]);
    return response()->json($commande, 201);
}

    public function store(Request $request)
    {
        $commande = Commande::create($request->all());
        return redirect()->route('commandes.index')
                        ->with('success','Commande created successfully.');
    }

    public function show(Commande $commande)
    {
        return view('commandes.show',compact('commande'));
    }

    public function edit(Commande $commande)
    {
        return view('commandes.edit',compact('commande'));
    }

    public function update(Request $request, Commande $commande)
    {
        $commande->update($request->all());
        return redirect()->route('commandes.index')
                        ->with('success','Commande updated successfully');
    }

    public function destroy(Commande $commande)
    {
        $commande->delete();
        return redirect()->route('commandes.index')
                        ->with('success','Commande deleted successfully');
    }
}
