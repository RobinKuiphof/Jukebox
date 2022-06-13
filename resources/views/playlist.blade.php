@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Playlist: {{$playlist->name}} Duration: {{$duration}}</h1>
    <table>
        <tr>
            <th>Song:</th>
            <th>Artist</th>
            <th>Duration</th>
            <th>Play</th>
            <th>Details</th>
            <th>Delete song from playlist</th>

        </tr>

        @for ($i=0; $i<count($song); $i++)
            <tr>
                <td><h3>{{$song[$i]->name}}</h3></td>
                <td>{{$song[$i]->artist}}</td>
                <td>{{$song[$i]->duration}}</td>
                <td><a href="/que/add/{{$song[$i]->id}}">Play</a></td>
                <td><a href="/song/{{$song[$i]->id}}" >Details</a></td>
                <td><a href="/playlist/delete/{{$song[$i]->id}}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a></td>
            </tr>
        @endfor
    </table>
</div>
@endsection

