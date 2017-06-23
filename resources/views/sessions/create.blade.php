@extends('layouts.default')
@section('title', 'Login')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>Login</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="email">Email:</label>
           <div class="input-group">
            <div class="input-group-addon">
             <span class="glyphicon glyphicon-envelope"></span>
          </div>

          <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        </div>

        <div class="form-group">
          <label for="password">Password(<a href="{{ route('password.reset') }}">Forgot password?</a>):</label>
           <div class="input-group">
   <div class="input-group-addon">
        <span class="glyphicon glyphicon-lock"></span>
   </div>

          <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <hr>
      <p>New to saya?<a href="{{ route('signup') }}">Sign Up</a></p>
    </div>
  </div>
</div>
@stop
