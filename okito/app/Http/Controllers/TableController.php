<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('tables.index', compact('tables'));
    }

    public function create()
    {
        return view('tables.create');
    }

    public function store(Request $request)
    {
        $table = Table::create($request->all());
        return redirect()->route('tables.index')
                        ->with('success','Table created successfully.');
    }

    public function show(Table $table)
    {
        return view('tables.show',compact('table'));
    }

    public function edit(Table $table)
    {
        return view('tables.edit',compact('table'));
    }

    public function update(Request $request, Table $table)
    {
        $table->update($request->all());
        return redirect()->route('tables.index')
                        ->with('success','Table updated successfully');
    }

    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->route('tables.index')
                        ->with('success','Table deleted successfully');
    }
}
