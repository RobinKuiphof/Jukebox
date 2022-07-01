<?php

namespace App\Http\Controllers;

use App\Models\welcome;
use App\Models\Song;
use App\Models\Playlist;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\welcome  $welcome
     * @return \Illuminate\Http\Response
     */


    public function show(welcome $welcome, Song $song, Playlist $playlists, Genre $genre)
    {
        $genre = $genre::all();
        $song = $song::all();
        $playlists = $playlists::where('user_id' , '=', Auth::id())->get();

        $session = Session::get('que');
        if(!empty($session)){
            $que = Song::find($session);
        }else{
            return view('welcome', ['songs' => $song, 'playlists' => $playlists, 'genre' => $genre, 'session' => $session]);
        }
        return view('welcome', ['songs' => $song, 'playlists' => $playlists, 'genre' => $genre, 'session' => $session,  'que' =>$que]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(welcome $welcome)
    {
        //
    }
}
