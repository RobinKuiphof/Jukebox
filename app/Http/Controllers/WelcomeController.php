<?php

namespace App\Http\Controllers;

use App\Models\welcome;

use Illuminate\Http\Request;

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
    // use App\Models\Playlists;
    use App\Models\Song;

    public function show(welcome $welcome, Song $songs)
    {
        dd($songs);
        return view('welcome', ['songs' => $songs, 'playlists' => $playlists]);
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
