@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Jukebox</h1>
    <div class="mt-5">
        <div class="width-50 d-inline-block align-top">
            <h1 class="text-center">Playlists</h1>
            @for ($i=0; $i<count($playlists); $i++)
                <a class="text-center" href="playlist/{{$playlists[$i]->id}}"><h2>{{$playlists[$i]->name}}</h2></a>
            @endfor

        </div>
        <div class="width-50 d-inline-block align-top">
            <h1 class="text-center">Genres</h1>
            @for ($i=0; $i<count($genre); $i++)
                <a class="text-center" href="genre/{{$genre[$i]->id}}"><h2>{{$genre[$i]->name}}</h2></a>
            @endfor

        </div>
  
        @if (!empty($session))
             <div class="w-100 d-inline-block align-top mt-5">
            <h1 class="text-center"> <a class="text-center" href="que">Current Que</a></h1>
            @for ($i=0; $i<count($que); $i++)
                 <a class="text-center" href="song/{{$que[$i]->id}}"><h2>{{$que[$i]->name}}</h2></a>
            @endfor

        </div>
        @endif
    </div>
</div>
@endsection
