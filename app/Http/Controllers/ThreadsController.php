<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
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
        //VALIDATE
        $thread = new Thread;
      //   $this->validate($request, [
      //  'title' => 'required|max:40',
      //  'body' => 'required|min:20',
      //   ]);
        $validator = Validator::make($request->all(), [
          'title' => 'required|max:40',
          'body' => 'required|min:20',
        ]);

      //  dd($validator);

        if ($validator->fails()) {
          return redirect('/threads/create')
            ->withInput()
            ->withErrors($validator);
        }
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = Auth::id();
        $thread->save();
        return redirect('/threads');
    }
}
