@extends('layouts.app')

@section('content')


<div class="container">
    <table>
        <tr>
            <th>Song:</th>
            <th>Created at:</th>
            <th>Updated at:</th>
            <th>Artist</th>
            <th>Duration</th>
            <th>Play</th>
        </tr>
        <tr>
            <td><h3>{{$song->name}}</h3></td>
            <td>{{$song->created_at}}</td>
            <td>{{$song->updated_at}}</td>
            <td>{{$song->artist}}</td>
            <td>{{$song->duration}}</td>
            <td><a>Play</a></td>
        </tr>
    </table>
</div>
@endsection
