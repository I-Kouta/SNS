@extends('layouts.login')

@section('content')

<div class="post-form">Follower List</div>

@foreach ($lists as $list)
<div class="list">
  <div class="left-list">
    <img class="form-icon" src="images/icon1.png" width="35" height="35">
    <div class="post-message">
      <div>{{ $list->user_name }}</div>
      <div>{{ $list->post }}</div>
    </div>
  </div>
  <div class="right-list">
    <div>{{ $list->updated_at }}</div>
  </div>
</div>
@endforeach

@endsection
