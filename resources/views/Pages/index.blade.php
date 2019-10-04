@extends('layouts.app')
@section('content')
<body>
    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{config('app.name')}}</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        @foreach ($DisPost as $post)
         <div class="col-md-4">
            <h2>{{$post->name}}</h2>
            <p>{{$post->description}}</p>
            <p><a class="btn btn-secondary" href="posts/{{$post->id}}" role="button">View details »</a></p>
          </div>
        @endforeach
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; {{config('app.name')}} {{now()->year .' - '.now()->addyear()->year}}</p>
    </footer>
</body>
@endsection
