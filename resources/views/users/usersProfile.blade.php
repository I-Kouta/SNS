@extends('layouts.login')

@section('content')

@foreach ($user as $user)
<div class="post-form">
  <img class="form-icon" src=" {{ asset('images/icon1.png') }}" width="35" height="35">
  <div class="post-message">
    <div>name {{ $user->username }}</div>
    <div>bio {{ $user->bio }}</div>
  </div>
</div>
@endforeach

@foreach ($posts as $posts)
<div class="list">
  <div class="left-list">
    <img class="form-icon" src=" {{ asset('images/icon1.png') }}" width="35" height="35">
    <div class="post-message">
      <div>{{ $posts->user->username }}</div>
      <div>{{ $posts->post }}</div>
    </div>
  </div>
  <div class="right-list">
    <div>{{ $posts->updated_at }}</div>
  </div>
</div>
@endforeach

@endsection
