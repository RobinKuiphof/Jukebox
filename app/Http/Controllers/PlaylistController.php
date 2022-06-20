<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Playlists;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\Session;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Playlist $playlist)
    {
        $playlists = playlist::all();

        return view('playlists', ['playlists' => $playlists]);
    }


    public function addsong(Playlist $playlist){
        $songs = Song::all();
        return view('Playlistaddsong', ['songs' => $songs, 'playlist' => $playlist]);
    }


    public function addsongtoplaylist(Playlist $playlist, $song_id){
        $playlist->song()->attach($song_id);
        return redirect('../../playlist/'. $playlist->id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createque');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $playlist = new Playlist();
        $playlist->name = request('name');
        $playlist->save();

        $playlist->song()->attach(Session::get('que'));
        $request->session()->forget('que');
        return redirect('../');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        $duration = 0;
        foreach($playlist->song as $song){
            $duration += $song->duration;
        }
        $duration = gmdate("H:i:s", $duration);

        return view('playlist', ['song' => $playlist->song, 'duration' => $duration, 'playlist' => $playlist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        return view('playlistupdate', ['playlist' => $playlist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
       $playlist->name = request('name');
       $playlist->save();
       return redirect('../../');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        // $playlist->song()->detach();
    }
}
