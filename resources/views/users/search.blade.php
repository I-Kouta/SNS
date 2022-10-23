@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'searchResult','class' => 'post-form']) !!}
  {{ Form::input('text', 'newPost', null, ['required', 'class' => 'search', 'placeholder' => 'ユーザー名']) }}
  <button type="submit"><img src="images/post.png" width="100" height="100"></button>
  {!! Form::close() !!}

<div class="search-form">
  @foreach ($user as $user)
  <div class="search-info">
    <div>{{ $user->username }}</div>
    <button type="submit" class="red-btn">フォロー</button>
  </div>
    @endforeach
</div>

@endsection
