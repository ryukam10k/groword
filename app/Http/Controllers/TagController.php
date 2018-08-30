<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
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
        $items = Tag::all();
        $param = ['items' => $items];
        return view('tag.index', $param);
    }

    public function add(Request $request)
    {
        return view('tag.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, tag::$rules);
        $tag = new Tag;
        $form = $request->all();
        unset($form['_token']);
        $tag->fill($form)->save();
        return redirect('/tag');
    }

    public function show(Request $request)
    {
        $tag = Tag::find($request->id);
        return view('tag.show', ['form' => $tag]);
    }

    public function edit(Request $request)
    {
        $tag = Tag::find($request->id);
        return view('tag.edit', ['form' => $tag]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Tag::$rules);
        $tag = Tag::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $tag->fill($form)->save();
        return redirect('/tag');
    }

    public function delete(Request $request)
    {
        $tag = Tag::find($request->id);
        return view('tag.del', ['form' => $tag]);
    }

    public function remove(Request $request)
    {
        Tag::find($request->id)->delete();
        return redirect('/tag');
    }
}
