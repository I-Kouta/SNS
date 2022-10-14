<!-- ログイン時のトップ画面 -->
<!-- 未ログイン時は遷移できたらダメ -->
@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'post/create','class' => 'post-form']) !!}

<div class="tweet-form">
  <img class="form-icon" src="images/icon1.png" width="35" height="35">
  {{ Form::input('text', 'newPost', null, ['required', 'class' => 'tweet', 'placeholder' => '投稿内容を入力してください']) }}
  <button type="submit"><img src="images/post.png" width="100" height="100"></button>
</div>

{!! Form::close() !!}

<div class='table'>
  @foreach ($list as $list)
  <div class="list">
    <div class="left-list">
      <div>{{ $list->user_id }}</div>
      <div>{{ $list->post }}</div>
    </div>
    <div class="right-list">
      <div>{{ $list->created_at }}</div>
      <div class="update-edit">
        {!! Form::open() !!}
        <button type="submit" ><img src="images/edit.png" width="20" height="20"></button>
        {!! Form::close() !!}

        {!! Form::open() !!}
        <button type="submit"><img src="images/trash-h.png" width="30" height="30"></button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
