@extends('layouts.login')

@section('content')

<div class="post-form">Follow List</div>

<!-- フォローしているユーザーのみ表示させたい -->
@foreach ($lists as $list)
<div class="list">
  <div class="left-list">
    <div>{{ $list->user_name }}</div>
    <div>{{ $list->post }}</div>
  </div>
  <div class="right-list">
    <div>{{ $list->updated_at }}</div>
  </div>
</div>
@endforeach

@endsection
