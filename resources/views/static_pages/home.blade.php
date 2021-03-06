@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared.status_form')
        </section>
        <h3>Says list:</h3>
        @include('shared.feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared.user_info', ['user' => Auth::user()])
        </section>
        <section class="stats">
          @include('shared.stats', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class="jumbotron">
      <h1>What's happening?</h1>
      
      <p>
       <h3> Welcome to Saya. </h3>
      </p>
      <p>
        New? <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign Up</a>
      </p>
    </div>
  @endif
@stop
