<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sentence;
use DB;

class SentenceController extends Controller
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
            $sort = 'sentences.updated_at';
        }
        $order = $request->order;
        if ($order == null) {
            $order = 'desc';
        }
        $keyword = $request->keyword;
        $items = Sentence::where('sentences.name', 'LIKE', "%$keyword%")
        ->orderBy($sort, $order)
        ->paginate(20);
        $param = ['items' => $items, 'sort' => $sort, 'order' => $order];
        return view('sentence.index', $param);
    }

    public function add(Request $request)
    {
        return view('sentence.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Sentence::$rules);
        $sentence = new Sentence;
        $form = $request->all();
        unset($form['_token']);
        $sentence->fill($form)->save();      
        return redirect('/sentence');
    }

    public function show(Request $request)
    {
        $sentence = Sentence::find($request->id);
        return view('sentence.show', ['form' => $sentence]);
    }

    public function edit(Request $request)
    {
        $sentence = Sentence::find($request->id);
        return view('sentence.edit', ['form' => $sentence]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Sentence::$rules);
        $sentence = Sentence::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $sentence->fill($form)->save();
        return redirect('/sentence');
    }

    public function delete(Request $request)
    {
        $sentence = Sentence::find($request->id);
        return view('sentence.del', ['form' => $sentence]);
    }

    public function remove(Request $request)
    {
        Sentence::find($request->id)->delete();
        return redirect('/sentence');
    }
}
