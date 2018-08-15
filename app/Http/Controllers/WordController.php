<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class WordController extends Controller
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
    
    public function index(Request $request)
    {
        $sort = $request->sort;
        if ($sort == null) {
            $sort = 'name';
        }
        $items = Word::orderBy($sort, 'asc')->paginate(5);
        $param = ['items' => $items, 'sort' => $sort];
        return view('word.index', $param);
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

    public function show(Request $request)
    {
        $word = Word::find($request->id);
        return view('word.show', ['form' => $word]);
    }

    public function edit(Request $request)
    {
        $word = Word::find($request->id);
        return view('word.edit', ['form' => $word]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Word::$rules);
        $word = Word::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $word->fill($form)->save();
        return redirect('/word');
    }

    public function delete(Request $request)
    {
        $word = Word::find($request->id);
        return view('word.del', ['form' => $word]);
    }

    public function remove(Request $request)
    {
        Word::find($request->id)->delete();
        return redirect('/word');
    }
}
