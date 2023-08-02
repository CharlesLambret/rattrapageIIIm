<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommandeController extends Controller
{
    public function index()
    {
        return Inertia::render('Commandes/Index', [
            'commandes' => Commande::all()->load('articles')
        ]);
    }

    public function create()
    {
        return Inertia::render('Commandes/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'table' => 'required',
        ]);

        Commande::create($request->only([
            'table',
        ]));
        return redirect()->route('commandes.create')
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
