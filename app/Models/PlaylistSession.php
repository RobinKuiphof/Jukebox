<?php

namespace App\Models;
use Illuminate\Support\Facades\Session;

class PlaylistSession{

    public static function getSession(){
        return Session::get('que');
    }

    public static function clearSession($request){
        $request->session()->forget('que');
    }

    public static function addSongToSession($que){
        $session = Session::get('que');
        if(empty($session)){
            $session = [];
        }
        array_push($session, $que);
        session(['que' => $session]);
        return redirect()->back();
    }
}

