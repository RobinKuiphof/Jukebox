<?php

namespace App\Http\Controllers;

use App\Models\Que;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Song;
use App\Models\PlaylistSession;



class QueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


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
    public function store(Request $request, $que)
    {
        return PlaylistSession::addSongToSession($que);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Que  $que
     * @return \Illuminate\Http\Response
     */
    public function show(Song $playlist)
    {

        $session = PlaylistSession::getSession();
        $songs = $playlist::find($session);

        $duration = 0;
        foreach($songs as $test){
            $duration += $test->duration;
        }
        $duration = gmdate("H:i:s", $duration);

        return view('que', ['song' => $songs, 'duration' => $duration]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Que  $que
     * @return \Illuminate\Http\Response
     */
    public function edit(Que $que)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Que  $que
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $que)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Que  $que
     * @return \Illuminate\Http\Response
     */
    public function destroy($que)
    {

        $session = PlaylistSession::getSession();
        $list = [];
        foreach($session as $song){
            if($song != $que){

                array_push($list, $song);
            }
        }
        session(['que' => $list]);
        return redirect()->back();

    }
}
