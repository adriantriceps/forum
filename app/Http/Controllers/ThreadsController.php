<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    //Returns Threads/index.php
    public function index()
    {
      $threads = [
        ['title' => 'Title A', 'body' => 'Lorem Ipsum dolor set.'],
        ['title' => 'Title B', 'body' => 'Þetta er B']
      ];

      return view('threads.index', compact('threads'));
    }

    public function create()
    {
      return view('threads.create');
    }

    public function show($id)
    {
      return view('threads.show');
    }
}
