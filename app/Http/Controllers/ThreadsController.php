<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use Auth;

class ThreadsController extends Controller

{
  public function __construct()
  {
    $this->middleware('auth')->except('index','show');
  }
    //Returns Threads/index.php
    public function index()
    {
      $threads = Thread::latest()->get();

      return view('threads.index', compact('threads'));
    }

    public function create()
    {
      return view('threads.create');
    }

    public function show($id)
    {
      $thread = Thread::find($id);
      return view('threads.show', compact('thread'));
    }

    public function store(Request $request)
    {
        //VALIDATE REQUEST
        $this->validate($request, [
          'title' => 'required|max:40',
          'body' => 'required|min:20',
        ]);

        //Create new Thread
      Thread::create([
          'title' => $request->title,
          'body' => $request->body,
          'user_id' => auth()->id()
        ]);

        return redirect('/threads');
    }
}
