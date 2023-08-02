<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleCommande;

class ArticleCommandeController extends Controller
{
    public function index()
    {
        $articleCommandes = ArticleCommande::all();
        return view('article_commandes.index', compact('articleCommandes'));
    }

    public function create()
    {
        return view('article_commandes.create');
    }

    public function store(Request $request)
    {
        $articleCommande = ArticleCommande::create($request->all());
        return redirect()->route('article_commandes.index')
                        ->with('success','ArticleCommande created successfully.');
    }

    public function show(ArticleCommande $articleCommande)
    {
        return view('article_commandes.show',compact('articleCommande'));
    }

    public function edit(ArticleCommande $articleCommande)
    {
        return view('article_commandes.edit',compact('articleCommande'));
    }

    public function update(Request $request, ArticleCommande $articleCommande)
    {
        $articleCommande->update($request->all());
        return redirect()->route('article_commandes.index')
                        ->with('success','ArticleCommande updated successfully');
    }

    public function destroy(ArticleCommande $articleCommande)
    {
        $articleCommande->delete();
        return redirect()->route('article_commandes.index')
                        ->with('success','ArticleCommande deleted successfully');
    }
}
