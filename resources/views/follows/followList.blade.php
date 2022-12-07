@extends('layouts.login')

@section('content')

<div class="post-form">Follow List</div>
@foreach ($image as $image)
@endforeach
<!-- フォローしているユーザーのみ表示させたい -->
@foreach ($lists as $list)
<div class="list">
  <div class="left-list">
    <a href="/user/{{$list->user_id}}/profile">
      <img src="{{ asset('images/icon1.png') }}" width="35" height="35">
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
