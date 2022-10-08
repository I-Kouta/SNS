<!-- ログイン時のトップ画面 -->
<!-- 未ログイン時は遷移できたらダメ -->
@extends('layouts.login')

@section('content')
<img class="user-image" src="images/icon1.png">

{!! Form::open(['class' => 'gray-back']) !!}

{{ Form::text('username',null,['class' => '', 'placeholder' => '投稿内容を入力してください']) }}

<img class="user-image" src="images/post.png">

{!! Form::close() !!}

@endsection
