@extends('layouts.app')

@section('content')


<div class="container">
    <table class="m-auto">
        @for($i=0; $i<count($songs); $i++)
            <tr>
                <th>{{$songs[$i]->name}}</th>
                <th><a class="btn-primary btn" href="{{$playlist->id}}/{{$songs[$i]->id}}">add song</a></th>
            </tr>

        @endfor
    </table>
</div>
@endsection
