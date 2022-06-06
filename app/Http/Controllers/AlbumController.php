<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->busca))
        {
            $busca = $request->busca;
            $albuns = Album::where('nome', 'like', '%'.$busca.'%')->get();
            // dd($albuns = Album::with(['tracks'])->where('nome', 'like', '%'.$busca.'%')->get());
            // $albuns = Album::whereHas('tracks', function (Builder $query) {
            //     $query->where('tracks', 'like', '%'.$busca.'%');
            // })->get();
        }
        else
        {
            $albuns = Album::all();
        }
        return view('Album.index', ['albuns' => $albuns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|max:150',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.max' => 'O campo nome deve ter no máximo 150 caracteres',
        ];
        $request->validate($regras, $feedback);
        $album = new Album();
        $album->create($request->all());

        return redirect()->route('Album.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('Album.show', ['album' => $album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->tracks()->delete();
        $album->delete();
        return redirect()->route('Album.index');
    }
}
