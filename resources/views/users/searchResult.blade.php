@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'searchResult','class' => 'post-form']) !!}
{{ Form::input('text', 'keyword', null, ['required', 'class' => 'search', 'placeholder' => 'ユーザー名']) }}
<button type="submit"><img src="images/post.png" width="100" height="100"></button>
<div class="search-word">
  検索ワード：{{ $keyword }}
</div>
{!! Form::close() !!}

<div class="search-form">
  @foreach ($user as $user)
  @if(Auth::id() != $user->id)
  <div class="search-info">
    {{ $user->username }}
    <button type="submit" class="red-btn">フォロー</button>
  </div>
  @endif
  @endforeach
</div>

@endsection
