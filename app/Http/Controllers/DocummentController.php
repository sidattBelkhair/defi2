<?php
namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocummentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }

    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nom_fichier' => 'required', 'chemin_fichier' => 'required', 'date_import' => 'required']);
        Document::create($request->all());
        return redirect()->route('documents.index');
    }

    public function show(Document $document)
    {
        return view('documents.show', compact('document'));
    }

    public function edit(Document $document)
    {
        return view('documents.edit', compact('document'));
    }

    public function update(Request $request, Document $document)
    {
        $request->validate(['nom_fichier' => 'required', 'chemin_fichier' => 'required', 'date_import' => 'required']);
        $document->update($request->all());
        return redirect()->route('documents.index');
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('documents.index');
    }
}