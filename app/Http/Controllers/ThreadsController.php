<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ThreadsController extends Controller

{
    //Returns Threads/index.php
    public function index()
    {
      $threads = Thread::all();

      return view('threads.index', compact('threads'));
    }

    public function create()
    {
      $tasks = [
        [ 'title' => 'Kaupa mjólk', 'complete' => true, 'link' => 'https://www.aha.is/verslun/netto-mjodd/byrjendakorfur/ms-nymjolk-1-5l' ],
        ['title' => 'Henda rusl', 'complete' => true, 'link' => 'http://kalka.is' ],
        ['title' => 'Elda mat', 'complete' => false, 'link' => 'https://eldumrett.is'],
        ['title' => 'Henda mat', 'complete' => true, 'link' => 'http://kalka.is'],
        ['title' => 'Kaupa í mat', 'complete' => false, 'link' => 'https://www.aha.is/verslun/netto-mjodd' ],
        ['title' => 'Borða', 'complete' => false, 'link' => 'http://kfc.is'],
        ['title' => 'Sofa', 'complete' => false, 'link' => 'https://www.dorma.is'],
        ['title' => 'Fara ì sturtu', 'complete' => false, 'link' => 'https://www.dorma.is']
        ];
      return view('threads.create', compact('tasks'));
    }

    public function show($id)
    {
      return view('threads.show');
    }

    public function store(Request $request)
    {
        //VALIDATE
        $thread = new Thread;
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id =  1;
        $thread->save();

        return redirect('/threads');
    }
}
