<?php
namespace App\Http\Controllers;

use App\Models\Variante;
use Illuminate\Http\Request;

class VarianteController extends Controller
{
    public function index()
    {
        $variantes = Variante::with('mot')->get();
        return view('variantes.index', compact('variantes'));
    }

    public function create()
    {
        return view('variantes.create');
    }

    public function store(Request $request)
    {
        $request->validate(['variante' => 'required', 'type' => 'required', 'mot_id' => 'required']);
        Variante::create($request->all());
        return redirect()->route('variantes.index');
    }

    public function show(Variante $variante)
    {
        return view('variantes.show', compact('variante'));
    }

    public function edit(Variante $variante)
    {
        return view('variantes.edit', compact('variante'));
    }

    public function update(Request $request, Variante $variante)
    {
        $request->validate(['variante' => 'required', 'type' => 'required', 'mot_id' => 'required']);
        $variante->update($request->all());
        return redirect()->route('variantes.index');
    }

    public function destroy(Variante $variante)
    {
        $variante->delete();
        return redirect()->route('variantes.index');
    }
}