@extends('layouts.login')

@section('content')

<div class="post-form">
  <img class="form-icon" src=" {{ asset('images/icon1.png') }}" width="35" height="35">
  <div class="post-message">
    <div>name</div>
    <div>bio</div>
  </div>
</div>

@foreach ($user as $user)
<div class="list">
  <div class="left-list">
    <img class="form-icon" src=" {{ asset('images/icon1.png') }}" width="35" height="35">
    <div class="post-message">
      <div>{{ $user->user->username }}</div>
      <div>{{ $user->post }}</div>
    </div>
  </div>
  <div class="right-list">
    <div>{{ $user->updated_at }}</div>
  </div>
</div>
@endforeach

@endsection
