@if ($errors->any())


    <div class="alert alert-danger" role="alert">
        <h6>Error list</h6>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif
@if(session('status'))
<div class="alert alert-primary" role="alert">
        {{session('status')}}
      </div>
@endif
