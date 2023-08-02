<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index()
    {
        $Articless = Articles::all();
        return view('Articless.index', compact('Articless'));
    }

    public function create()
    {
        return view('Articless.create');
    }

    public function store(Request $request)
    {
        $Articles = Articles::create($request->all());
        return redirect()->route('Articless.index')
                        ->with('success','Articles created successfully.');
    }

    public function show(Articles $Articles)
    {
        return view('Articless.show',compact('Articles'));
    }

    public function edit(Articles $Articles)
    {
        return view('Articless.edit',compact('Articles'));
    }

    public function update(Request $request, Articles $Articles)
    {
        $Articles->update($request->all());
        return redirect()->route('Articless.index')
                        ->with('success','Articles updated successfully');
    }

    public function destroy(Articles $Articles)
    {
        $Articles->delete();
        return redirect()->route('Articless.index')
                        ->with('success','Articles deleted successfully');
    }
}
