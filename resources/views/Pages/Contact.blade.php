@extends('layouts.app')
@section('content')
<h1 style="margin-top:1rem; margin-bottom:1rem;">Contact us</h1>
<form action="/Contact" method="post" style="margin-top:1rem;">
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Full name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content" placeholder="xxxx xxxxx xxxxx xxxx ..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">sent message</button>
      </form>
@endsection
