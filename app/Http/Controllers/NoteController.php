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
        return view('user.note.add');
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
        return view('user.note.edit')->with('note',
            auth()->user()->notes()->findOrFail($id)
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'note' => ['required', 'min:3', 'max:255'],
        ]);

        $note = auth()->user()->notes()->findOrFail($id);
        $note->note = $request->note;
        $note->save();

        return redirect(route('home'))->with('status', 'Updated successfully...');
    }

    public function delete($id)
    {
        auth()->user()->notes()->findOrFail($id)->delete();

        return redirect(route('home'))->with('status', 'Deleted successfully...');
    }
}
