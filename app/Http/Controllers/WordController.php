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
}
