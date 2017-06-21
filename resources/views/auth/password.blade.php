@extends('layouts.default')
@section('title', 'Reset Password')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Reset Password</div>
        <div class="panel-body">
          @include('shared.errors')
          <form method="POST" action="{{ route('password.reset') }}">
            {{ csrf_field() }}
          <p class="col-md-10">
               Enter your email below and we'll send you a link to activate it.
          </p>
            <div class="form-group">
              <label class="col-md-4 control-label">Email:</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Reset Password
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
