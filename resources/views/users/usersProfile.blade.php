@extends('layouts.login')

@section('content')

@foreach ($user as $user)
<div class="post-form">
  <div class="post-message">
    <div>name{{ $user->username }}</div>
    <div>bio{{ $user->bio }}</div>
  </div>
</div>
@endforeach

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
