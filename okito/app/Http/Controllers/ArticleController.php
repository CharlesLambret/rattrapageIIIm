<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index()
    {
        $Articles = Articles::all();
        return view('Articles.index', compact('Articles'));
    }

    public function create()
    {
        return view('Articles.create');
    }

    public function store(Request $request)
    {
        $Articles = Articles::create($request->all());
        return redirect()->route('Articles.index')
                        ->with('success','Articles created successfully.');
    }

    public function show(Articles $Articles)
    {
        return view('Articles.show',compact('Articles'));
    }

    public function edit(Articles $Articles)
    {
        return view('Articles.edit',compact('Articles'));
    }

    public function update(Request $request, Articles $Articles)
    {
        $Articles->update($request->all());
        return redirect()->route('Articles.index')
                        ->with('success','Articles updated successfully');
    }

    public function destroy(Articles $Articles)
    {
        $Articles->delete();
        return redirect()->route('Articles.index')
                        ->with('success','Articles deleted successfully');
    }
}
