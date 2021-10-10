<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Association, Members, User };
use Illuminate\Support\Facades\Auth;

class AssociationController extends Controller
{
    public function index()
    {
        $associations = Association::all();
        return view('association.index', compact('associations'));
    }

    public function create()
    {
        $user = User::all();
        return view('association.create' , compact('user'));
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
        'name' => 'required|max:100',
        'description' => 'required|max:500',
        ]);

        $association = new Association;
        $association->name = $request->name;
        $association->description = $request->description;
        $association->user_id = auth()->user()->id;
        $association->save();
        return back()->with('message', "L'association a bien été créée !");
    }

    public function show(Association $association)
    {
        $members = Members::all();
        $users = User::all();
        return view('association.show', compact('association', 'members', 'users'));
    }

    public function edit(Association $association)
    {
        return view('association.edit', compact('association'));
    }

    public function update(Request $request, Association $association)
    {
        $data = $request->validate([
        'name' => 'required|max:300',
        'description' => 'required|max:500',
        ]);

        $association->name = $request->name;
        $association->description = $request->description;
        $association->save();
        return back()->with('message', "Les informations de l'association ont bien été modifiées !");
    }

    public function destroy(Association $association)
    {
        $association->delete();
        return back()->with('message', "Cette association a bien été supprimée !");
    }
}
