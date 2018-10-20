<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('note.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'note' => ['required', 'min:3', 'max:255'],
        ]);

        auth()->user()->notes()->create($request->only('note'));

        return redirect(route('home'));
    }

    public function edit($id)
    {
        $note = auth()->user()->notes()->find($id)->first();

        return view('note.edit')->with('note', $note);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'note' => ['required', 'min:3', 'max:255'],
        ]);

        $note = auth()->user()->notes()->find($id);
        $note->note = $request->note;
        $note->save();

        return redirect(route('home'))->with('status', 'Updated successfully...');
    }

    public function delete($id)
    {
        auth()->user()->notes()->find($id)->delete();

        return redirect(route('home'))->with('status', 'Deleted successfully...');
    }
}
