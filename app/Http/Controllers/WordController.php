<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Tag;
use DB;

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
            $sort = 'words.updated_at';
        }
        $order = $request->order;
        if ($order == null) {
            $order = 'desc';
        }
        $keyword = $request->keyword;
        $items = Word::where('words.name', 'LIKE', "%$keyword%")
        ->leftJoin('tagmaps', 'words.id', '=', 'tagmaps.word_id')
        ->leftJoin('tags', 'tagmaps.tag_id', '=', 'tags.id')
        ->select(
            'words.*',
            DB::raw('GROUP_CONCAT(tags.name) AS tags')
        )
        ->groupBy('words.id')
        ->orderBy($sort, $order)
        ->paginate(20);
        //dd($items->toSql());
        $param = ['items' => $items, 'sort' => $sort, 'order' => $order];
        //dd($param);
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
        $tags = Tag::all();
        return view('word.edit', ['form' => $word])->with(['tags' => $tags]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Word::$rules);
        $word = Word::find($request->id);
        $form = $request->all();
        unset($form['_token']);

        $tagmaps = [
            'word_id' => $request->id,
            'tag_id' => $request->tags,
        ];
        DB::table('tagmaps')->where('word_id', $request->id)->delete();
        DB::table('tagmaps')->insert($tagmaps);
        unset($form['tags']);
        
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
