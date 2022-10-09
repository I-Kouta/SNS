<!-- ログイン時のトップ画面 -->
<!-- 未ログイン時は遷移できたらダメ -->
@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'post/create','class' => 'post-form']) !!}

<div class="tweet-form">
  <img class="form-icon" src="images/icon1.png" width="35" height="35">
  {{ Form::input('text', 'newPost', null,['required', 'class' => 'tweet', 'placeholder' => '投稿内容を入力してください']) }}
  <button type="submit" class="post-icon"><img src="images/post.png" width="100" height="100"></button>
</div>

{!! Form::close() !!}

@endsection
