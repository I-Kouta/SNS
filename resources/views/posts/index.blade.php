<!-- ログイン時のトップ画面 -->
<!-- 未ログイン時は遷移できたらダメ -->
@extends('layouts.login')

@section('content')

{!! Form::open(['class' => 'post-form']) !!}

<img class="form-icon" src="images/icon1.png" width="35" height="35">
{{ Form::text('username',null,['class' => '', 'placeholder' => '投稿内容を入力してください']) }}
<img class="user-image" src="images/post.png">

{!! Form::close() !!}

@endsection
