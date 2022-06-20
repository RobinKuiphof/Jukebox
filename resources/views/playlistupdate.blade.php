@extends('layouts.app')

@section('content')


<div class="container">
    <div class="card">
        <div class="card-header orangeBackground text-center font-weight-bold">
          Playlist wijzegen
        </div>
        <div class="card-body">
          <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="../edit/{{$playlist->id}}">
           @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Naam playlist</label>
              <input type="text" id="name" name="name" class="form-control" required="" value="{{$playlist->name}}">
            </div>
            <button type="submit" class="button btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</div>


@endsection

