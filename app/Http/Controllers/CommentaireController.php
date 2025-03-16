<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index()
    {
        $commentaires = Commentaire::with(['mot', 'utilisateur'])->get();
        return view('commentaires.index', compact('commentaires'));
    }

    public function create()
    {
        return view('commentaires.create');
    }

    public function store(Request $request)
    {
        $request->validate(['mot_id' => 'required', 'utilisateur_id' => 'required', 'commentaire' => 'required']);
        Commentaire::create($request->all());
        return redirect()->route('commentaires.index');
    }

    public function show(Commentaire $commentaire)
    {
        return view('commentaires.show', compact('commentaire'));
    }

    public function edit(Commentaire $commentaire)
    {
        return view('commentaires.edit', compact('commentaire'));
    }

    public function update(Request $request, Commentaire $commentaire)
    {
        $request->validate(['mot_id' => 'required', 'utilisateur_id' => 'required', 'commentaire' => 'required']);
        $commentaire->update($request->all());
        return redirect()->route('commentaires.index');
    }

    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return redirect()->route('commentaires.index');
    }
}