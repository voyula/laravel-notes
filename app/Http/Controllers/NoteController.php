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
        return view('add.note');
    }

    public function store(Request $request)
    {
        $request->validate([
            'note' => ['required', 'min:3', 'max:255'],
        ]);

        auth()->user()->notes()->create($request->only('note'));

        return redirect(route('home'));
    }
}
