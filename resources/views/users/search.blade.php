@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'searchResult','class' => 'post-form']) !!}
<!-- inputタグ：type属性, name属性, 初期値, [それ以降] -->
{{ Form::input('text', 'keyword', null, ['required', 'class' => 'search', 'placeholder' => 'ユーザー名']) }}
<button type="submit"><img src="images/post.png" width="100" height="100"></button>
@if(!empty($keyword))
<div class="search-word">
  検索ワード：{{ $keyword }}
</div>
@endif
{!! Form::close() !!}

<div class="search-form">
  @foreach ($user as $user)
  @if(Auth::id() != $user->id)
  <div class="search-info">
    {{ $user->username }}
    <!-- フォローしていなければ -->
    <button type="submit" class="blue-btn"><a>フォローする</a></button>
    <!-- フォローしていたら -->
    <button type="submit" class="red-btn"><a>フォロー解除</a></button>
    <!-- end -->
  </div>
  @endif
  @endforeach
</div>

@endsection
