<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EngWord;

class WordApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = EngWord::all();
        return $items->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $word = EngWord::find($id);
        return $word->toArray();
    }

    public function getwords2($sentence)
    {
        $keywords = explode(' ', $sentence);
        $words = EngWord::whereIn('name', $keywords)->get();
        return $words;
    }

    public function getwords($sentence)
    {
        $keywords = explode(' ', $this->replaceSymbol($sentence));
        $words = array();

        foreach ($keywords as $keyword) {
            $word = EngWord::where('name', $keyword)->first();
            if (is_null($word)) {
                $word = new EngWord();
                $word->name = $keyword;
                $word->meaning = "unknown";
            }
            array_push($words, $word);
        }
 
        return $words;
    }

    private function replaceSymbol($sentence) {
        $sentence = str_replace('.', '', $sentence);
        $sentence = str_replace(',', '', $sentence);
        return $sentence;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
