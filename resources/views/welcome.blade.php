@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Jukebox</h1>
    <div class="mt-5">
        <div class="width-50 d-inline-block align-top">
            <h1>Playlists</h1>
            @for ($i=0; $i<count($playlists); $i++)
                <a href="playlist/{{$playlists[$i]->id}}"><h2>{{$playlists[$i]->name}}</h2></a>
            @endfor

        </div>
        <div class="width-50 d-inline-block align-top">
            <h1>Songs</h1>
            @for ($i=0; $i<count($songs); $i++)
                <a href="song/{{$songs[$i]->id}}"><h2>{{$songs[$i]->name}}</h2></a>
            @endfor
        </div>
    </div>
</div>
@endsection
