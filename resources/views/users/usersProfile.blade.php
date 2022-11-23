@extends('layouts.login')

@section('content')

@foreach ($user as $user)
<div class="post-form">
  <img class="form-icon" src=" {{ asset('images/icon1.png') }}" width="35" height="35">
  <div class="post-message prof-head">
    <div class="prof-head-title">
      <div class="under-margin">name</div>
      <div>bio</div>
    </div>
    <div class="">
      <div class="under-margin">{{ $user->username }}</div>
      <div>{{ $user->bio }}</div>
    </div>
  </div>
  @if (auth()->user()->isFollowing($user->id))
  <p class="unFollow-btn"><a href="/{{$user->id}}/unFollow">フォロー解除</a></p>
  @else
  <p class="follow-btn"><a href="/{{$user->id}}/follow">フォローする</a></p>
  @endif
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
