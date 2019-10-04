@extends('layouts.app')
@section('content')
<div class="card"style="margin-top:1em;margin-bottom:1em;">
        <div class="card-header">
          {{$post->id}}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$post->name}}</h5>
          <p class="card-text">{{$post->description}}</p>
          <hr class="my-3">
          <a href="/posts/edit/{{$post->id}}" class="btn btn-primary float-left" style="width:7rem;">Edit</a>
          <form action="{{route('posts.destroy',['id' => $post->id])}}" method="post">
                @csrf
                @method('delete')
              <button type="submit" class="btn btn-danger float-left" style="margin-left:1em;width:7rem;">delete</button>
            </form>
        </div>
      </div>
@endsection
