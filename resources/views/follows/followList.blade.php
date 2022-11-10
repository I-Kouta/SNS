@extends('layouts.login')

@section('content')

<div class="post-form">Follow List</div>

<!-- フォローしているユーザーのみ表示させたい -->
@foreach ($lists as $list)
<div class="list">
  <div class="left-list">
    <a href="/top">
      <img class="form-icon" src="images/icon1.png" width="35" height="35">
    </a>
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
