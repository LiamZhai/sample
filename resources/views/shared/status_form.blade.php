<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared.errors')
  {{ csrf_field() }}
  <textarea class="form-control" rows="3" placeholder="What's happening?" name="content">{{ old('content') }}</textarea>
  <button type="submit" class="btn btn-primary pull-right">Saya</button>
</form>
