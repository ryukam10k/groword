<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class WordController extends Controller
{
    
    public function index(Request $request)
    {
        $items = Word::all();
        return view('word.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('word.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Word::$rules);
        $word = new Word;
        $form = $request->all();
        unset($form['_token']);
        $word->fill($form)->save();
        return redirect('/word');
    }
}
