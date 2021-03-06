@extends('layouts.default')
@section('title', 'Settings')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>Settings</h5>
    </div>
      <div class="panel-body">

        @include('shared.errors')

        <div class="gravatar_edit">
          <a href="http://gravatar.com/emails" target="_blank">
            <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>
          </a>
        </div>

        <form method="POST" action="{{ route('users.update', $user->id )}}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
              <label for="name">Name:</label>
<div class="input-group">
   <div class="input-group-addon">
<span class="glyphicon glyphicon-user"></span>
   </div>

              <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
           </div>

　　　　　　　<div class="form-group">
              <label for="email">Email:</label>
           <div class="input-group">
            <div class="input-group-addon">
             <span class="glyphicon glyphicon-envelope"></span>
          </div>

              <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
            </div>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
           <div class="input-group">
   <div class="input-group-addon">
        <span class="glyphicon glyphicon-lock"></span>
   </div>

              <input type="password" name="password" class="form-control" value="{{ old('password') }}">
             </div>
             </div>

            <div class="form-group">
              <label for="password_confirmation">Confirm Password:</label>
           <div class="input-group">
   <div class="input-group-addon">
        <span class="glyphicon glyphicon-lock"></span>
   </div>

              <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Done</button>
        </form>
    </div>
  </div>
</div>
@stop
