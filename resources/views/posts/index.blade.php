<!-- ログイン時のトップ画面 -->
<!-- 未ログイン時は遷移できたらダメ -->
@extends('layouts.login')

@section('content')

{!! Form::open(['class' => 'post-form']) !!}

<div class="tweet-form">
  <img class="form-icon" src="images/icon1.png" width="35" height="35">
  {{ Form::text('username',null,['class' => 'tweet', 'placeholder' => '投稿内容を入力してください']) }}
  <a href="post/create"><img class="post-icon" src="images/post.png" width="70" height="70"></a>
</div>

{!! Form::close() !!}

@endsection
