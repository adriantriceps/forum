<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
      $threads = [
        ['fullname' => 'Adrian Krzysztof Czaplinski', 'username' => 'addicool', 'email' => 'adrian@adrianchamp.com', 'text-head' => 'Veitingarstaðir','text-head-link' => 'http://leit.is/veitingastadir?l=midbaer', 'text-body' => 'Veit einhver um góðar uppskriftir'],
        ['fullname' => 'Adrian Krzysztof Czaplinski', 'username' => 'addicool', 'email' => 'adrian@adrianchamp.com', 'text-head' => 'Elda', 'text-head-link' => 'https://eldumrett.is', 'text-body' => 'Skiptir fann góðasiðu']
      ];

      return view('profiles.index', compact('threads'));
    }
}
