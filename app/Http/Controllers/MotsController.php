<?php

namespace App\Http\Controllers;

use App\Models\Mot;
use Illuminate\Http\Request;

class MotsController extends Controller
{
    public function index()
    {
        $mots = Mot::all();
        return view('mots.index', compact('mots'));
    }

    public function create()
    {
        return view('mots.create');
    }

    public function store(Request $request)
    {
        $request->validate(['mot' => 'required']);
        Mot::create($request->all());
        return redirect()->route('mots.index');
    }

    public function show(Mot $mot)
    {
        return view('mots.show', compact('mot'));
    }

    public function edit(Mot $mot)
    {
        return view('mots.edit', compact('mot'));
    }

    public function update(Request $request, Mot $mot)
    {
        $request->validate(['mot' => 'required']);
        $mot->update($request->all());
        return redirect()->route('mots.index');
    }

    public function destroy(Mot $mot)
    {
        $mot->delete();
        return redirect()->route('mots.index');
    }
}