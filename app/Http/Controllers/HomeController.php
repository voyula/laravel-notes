<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('home')->with('notes', $user->notes()->get());
    }

    public function addNote(Request $request)
    {
        $user = Auth::user();
        $user->notes()->create($request->all());
        return redirect(route('home'));
    }
}
