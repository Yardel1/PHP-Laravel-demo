<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jokes;


class JokesController extends Controller
{
    public function show($id)
    {
      $jokes = Jokes::find($id);
      return view('jokes.show', array('jokes' => $jokes));
    }

    //
}

