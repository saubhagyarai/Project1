@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
  <h1>Welcome To Laravel!</h1>
  <p>This is the laravel application, You can Sign Up and publish your blog!! :-) </p>
  <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg"
      href="/register" role="button">Sign Up</a></p>
</div>
@endsection