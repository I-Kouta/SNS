@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'searchResult','class' => 'post-form']) !!}
<!-- inputタグ：type属性, name属性, 初期値, [それ以降] -->
{{ Form::input('text', 'keyword', null, ['required', 'class' => 'search', 'placeholder' => 'ユーザー名']) }}
<button type="submit"><img src="images/post.png" width="100" height="100"></button>
<div class="">
    <div>検索ワード：</div>
  </div>
{!! Form::close() !!}

<div class="search-form">
  @foreach ($user as $user)
  @if(Auth::id() != $user->id)
  <div class="search-info">
    <div>{{ $user->username }}</div>
    <button type="submit" class="red-btn">フォロー</button>
  </div>
  @endif
  @endforeach
</div>

@endsection
