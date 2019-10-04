<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">{{config('app.name')}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                      <a class="nav-link" href="/">Home </a>
                    </li>
                    <li class="nav-item {{Request::is('posts') ? 'active' : ''}}">
                      <a class="nav-link" href="/posts">posts</a>
                    </li>
                    <li class="nav-item {{Request::is('About') ? 'active' : ''}}">
                      <a class="nav-link" href="/About" >About</a>
                    </li>
                    <li class="nav-item {{Request::is('Contact') ? 'active' : ''}}">
                      <a class="nav-link " href="/Contact">contact us</a>
                    </li>
                    <li class="nav-item {{Request::is('posts/create') ? 'active' : ''}}">
                      <a class="nav-link " href="/posts/create">New post</a>
                    </li>
                  </ul>
                </div>
              </nav>

    <div class="container">
        <div class="mb-3"></div>
        @include('Include.Alert')
        @yield('content')
    </div>

</body>

</html>
