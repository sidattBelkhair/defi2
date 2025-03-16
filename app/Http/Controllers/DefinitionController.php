<?php
namespace App\Http\Controllers;

use App\Models\Definition;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    public function index()
    {
        $definitions = Definition::with('mot')->get();
        return view('definitions.index', compact('definitions'));
    }

    public function create()
    {
        return view('definitions.create');
    }

    public function store(Request $request)
    {
        $request->validate(['mot_id' => 'required', 'definition' => 'required']);
        Definition::create($request->all());
        return redirect()->route('definitions.index');
    }

    public function show(Definition $definition)
    {
        return view('definitions.show', compact('definition'));
    }

    public function edit(Definition $definition)
    {
        return view('definitions.edit', compact('definition'));
    }

    public function update(Request $request, Definition $definition)
    {
        $request->validate(['mot_id' => 'required', 'definition' => 'required']);
        $definition->update($request->all());
        return redirect()->route('definitions.index');
    }

    public function destroy(Definition $definition)
    {
        $definition->delete();
        return redirect()->route('definitions.index');
    }
}