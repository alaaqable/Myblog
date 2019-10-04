@extends('layouts.app')
@section('content')
<h1 style="margin-top:1rem; margin-bottom:1rem;">Create new post</h1>
<form action="/posts/{{$post->id}}" method="post" style="margin-top:1rem;">
    @csrf
    @method('put')
        <div class="form-group">
          <label for="exampleFormControlInput1">Full name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$post->name}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{$post->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update post</button>
      </form>
@endsection
