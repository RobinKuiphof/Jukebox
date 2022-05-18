@extends('layouts.app')

@section('content')


<div class="container">
    <table>
        <tr>
            <th>Song:</th>
            <th>Created at:</th>
            <th>Updated at:</th>
        </tr>
            <tr>
                <td><h3>{{$song->name}}</h3></td>
                <td>{{$song->created_at}}</td>
                <td>{{$song->updated_at}}</td>
            </tr>
    </table>
</div>
@endsection
