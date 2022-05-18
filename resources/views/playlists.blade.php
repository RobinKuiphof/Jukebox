@extends('layouts.app')

@section('content')


<div class="container">
    <table>
        <tr>
            <th>Playlist</th>
            <th>Created at:</th>
            <th>Updated at:</th>
        </tr>
        @for($i=0; $i<count($playlists); $i++)
            <tr>
                <td><a href="playlist/{{$playlists[$i]->id}}"><h3>{{$playlists[$i]->name}}</h3></a></td>
                <td>{{$playlists[$i]->created_at}}</td>
                <td>{{$playlists[$i]->updated_at}}</td>
            </tr>

        @endfor
    </table>
</div>
@endsection
