<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use App\Tag;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pertanyaan = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "user_id" => $request["user_id"]
        ]);

        $tagArr = explode(',', $request->tags);
        $tagsMulti  = [];
        foreach($tagArr as $strTag){
            $tagArrAssc["nama"] = $strTag;
            $tagsMulti[] = $tagArrAssc;
        }
        // dd($tagsMulti);
        // Create Tags baru
        foreach($tagsMulti as $tagCheck){
            $tag = Tag::firstOrCreate($tagCheck);
            $pertanyaan->tags()->attach($tag->id);
        }
        
        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $pertanyaan)
    {
        return view('pertanyaan/show', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //
    }
}
