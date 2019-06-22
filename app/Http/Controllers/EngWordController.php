<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EngWord;
use DB;

class EngWordController extends Controller
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
            $sort = 'eng_words.updated_at';
        }
        $order = $request->order;
        if ($order == null) {
            $order = 'desc';
        }
        $keyword = $request->keyword;
        $items = EngWord::where('eng_words.name', 'LIKE', "%$keyword%")
        ->orderBy($sort, $order)
        ->paginate(20);
        $param = ['items' => $items, 'sort' => $sort, 'order' => $order];
        return view('eng_word.index', $param);
    }

    public function add(Request $request)
    {
        return view('eng_word.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, EngWord::$rules);
        $eng_word = new EngWord;
        $form = $request->all();
        unset($form['_token']);
        $eng_word->fill($form)->save();      
        return redirect('/eng_word');
    }
}
