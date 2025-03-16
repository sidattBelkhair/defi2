<?php
namespace App\Http\Controllers;

use App\Models\Recompense;
use Illuminate\Http\Request;

class RecompenseController extends Controller
{
    public function index()
    {
        $recompenses = Recompense::with('utilisateur')->get();
        return view('recompenses.index', compact('recompenses'));
    }

    public function create()
    {
        return view('recompenses.create');
    }

    public function store(Request $request)
    {
        $request->validate(['utilisateur_id' => 'required', 'points_gagnes' => 'required']);
        Recompense::create($request->all());
        return redirect()->route('recompenses.index');
    }

    public function show(Recompense $recompense)
    {
        return view('recompenses.show', compact('recompense'));
    }

    public function edit(Recompense $recompense)
    {
        return view('recompenses.edit', compact('recompense'));
    }

    public function update(Request $request, Recompense $recompense)
    {
        $request->validate(['utilisateur_id' => 'required', 'points_gagnes' => 'required']);
        $recompense->update($request->all());
        return redirect()->route('recompenses.index');
    }

    public function destroy(Recompense $recompense)
    {
        $recompense->delete();
        return redirect()->route('recompenses.index');
    }
}