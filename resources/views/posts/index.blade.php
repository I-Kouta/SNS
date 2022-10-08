<!-- ログイン時のトップ画面 -->
<!-- 未ログイン時は遷移できたらダメ -->
@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'post/create','class' => 'post-form']) !!}

<div class="tweet-form">
  <img class="form-icon" src="images/icon1.png" width="35" height="35">
  {{ Form::text('text',null,['class' => 'tweet', 'placeholder' => '投稿内容を入力してください']) }}
  <button type="submit" class="post-icon"><img src="images/post.png" width="70" height="70"></button>
</div>

{!! Form::close() !!}

@endsection
