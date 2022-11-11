@extends('layouts.login')

@section('content')

<div class="post-form">
  <div class="post-message">
    <div>name</div>
    <div>bio</div>
    <div class="search-form">
      @foreach ($user as $user)
      @if(Auth::id() != $user->id)
      <div class="search-info">
        @if (auth()->user()->isFollowing($user->id))
        <p class="unFollow-btn"><a href="/{{$user->id}}/unFollow">フォロー解除</a></p>
        @else
        <p class="follow-btn"><a href="/{{$user->id}}/follow">フォローする</a></p>
        @endif
      </div>
      @endif
      @endforeach
    </div>
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
