@extends('layouts.login')

@section('content')

<div class="post-form">
  <img class="form-icon" src=" {{ asset('images/icon1.png') }}" width="35" height="35">
  <div class="post-message">
    @foreach ($user as $user)
    <div>name{{ $user->user->username }}</div>
    <div>bio{{ $user->user->bio }}</div>
    @endforeach
  </div>
</div>

<div class="list">
  <div class="left-list">
    <div class="post-message">
      <div>投稿者名</div>
      <div>投稿内容</div>
    </div>
  </div>
  <div class="right-list">
    <div>投稿日時</div>
  </div>
</div>

@endsection
