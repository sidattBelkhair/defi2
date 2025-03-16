<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController 
{
    public function index()
    {
        $Users = User::all();
        return view('utilisateurs.index', compact('Users'));
    }

    public function create()
    {
        return view('utilisateurs.create');
    }

    public function store(Request $request)
    {
        $fields = $request->validate(['name' => 'required', 'password' => 'required']);
        User::create($fields);
        return redirect()->route('utilisateurs.index');
    }

    public function show(User $User)
    {
        return view('utilisateurs.show', compact('User'));
    }

    public function edit(User $User)
    {
        return view('utilisateurs.edit', compact('User'));
    }

    public function update(Request $request, User $User)
    {
        $request->validate(['nom' => 'required', 'mot_de_passe' => 'required']);
        $User->update($request->all());
        return redirect()->route('utilisateurs.index');
    }

    public function destroy(User $User)
    {
        $User->delete();
        return redirect()->route('utilisateurs.index');
    }

    public function profile()
    {
        return view("utilisateurs.profile");
    }
}
