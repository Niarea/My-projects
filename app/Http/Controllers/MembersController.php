<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Members, Association};
use Illuminate\Support\Facades\Route;

class MembersController extends Controller
{
    public function index()
    {
        $members = Members::all();
        $association = Association::all();
        return view('members.index', compact('members', 'association'));
    }

    public function create()
    {
        $members = Members::all();
        $association = Association::all();
        return view('members.create', compact('members', 'association'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'name' => 'required|max:100',
        'first_name' => 'required|max:100',
        'contact' => 'required|min:10|max:10',
        'email' => 'required',
        'poste' => 'required|max:50',
        ]);

        $members = new Members;
        $members = Members::create($request->all());
        $members->save();
        return back()->with('message', "Le nouveau membre a bien été ajouté !");
    }

    public function show(Members $members, $id)
    {
        $members = Members::find($id);

        return view('members.show', [
            'members' => $members,
            'association' => $members->association->name,
        ]);
    }

    public function edit(Members $member)
    {
        $associations = Association::all();
        return view('members.edit', [
            'member' => $member,
            'associations' => $associations,
        ]);
    }

    public function update(Request $request, Members $member)
    {
        $data = $request->validate([
        'name' => 'required|max:50',
        'first_name' => 'required|max:50',
        'contact' => 'required|min:10|max:10',
        'email' => 'required|email',
        'poste' => 'required|max:150',
        'association_id' => 'required',
        ]);

        $member->update($request->all());
        $member->save();
        return back()->with('message', "Les informations de ce membre ont bien été modifiées !");
    }

    public function destroy(Members $member)
    {
        $member->delete();
        return back()->with('message', "Ce membre a bien été supprimé !");
    }
}
