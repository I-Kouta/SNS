@extends('layouts.login')

@section('content')

<div class="post-form">
  <img class="form-icon" src="images/icon1.png" width="35" height="35">
  {{ Form::input('text', 'newPost', null, ['required', 'class' => 'tweet', 'placeholder' => '投稿内容を入力してください', 'maxlength' => '150']) }}
  <button type="submit"><img src="images/post.png" width="100" height="100"></button>
</div>

@endsection
