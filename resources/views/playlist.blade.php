@extends('layouts.app')

@section('content')


<div class="container">
    <table>
        <tr>
            <th>Song:</th>
            <th>Created at:</th>
            <th>Updated at:</th>
            <th>Play</th>
            <th>Delete song from playlist</th>

        </tr>

        @for ($i=0; $i<count($song); $i++)
            <tr>
                <td><h3>{{$song[$i]->name}}</h3></td>
                <td>{{$song[$i]->created_at}}</td>
                <td>{{$song[$i]->updated_at}}</td>
                <td><a>Play</a></td>
                <td><a href="/playlist/delete/{{$song[$i]->id}}">Delete</a></td>
            </tr>
        @endfor
    </table>
</div>
@endsection
