@extends('layouts.app')
@section('content')
<h1 style="margin-top:1rem; margin-bottom:1rem;">Create new post</h1>
<form action="/posts" method="post" style="margin-top:1rem;">
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Full name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add post</button>
      </form>
@endsection
