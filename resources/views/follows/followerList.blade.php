@extends('layouts.login')

@section('content')

<div class="post-form">
  Follower List
  @foreach ($image as $image)
  @if(Auth::id() != $image->id)
  @if (auth()->user()->isFollowed($image->id))
  <img src="{{ \Storage::url($image->images) }}" width="35" height="35">
  @endif
  @endif
  @endforeach
</div>

@foreach ($lists as $list)
<div class="list">
  <div class="left-list">
    <a href="/user/{{$list->user_id}}/profile">
      <img src="{{ \Storage::url($list->user->images) }}" width="35" height="35">
    </a>
    <div class="post-message">
      <div class="under-margin">{{ $list->user_name }}</div>
      <div>{{ $list->post }}</div>
    </div>
  </div>
  <div class="right-list">
    <div>{{ $list->updated_at }}</div>
  </div>
</div>
@endforeach

@endsection
