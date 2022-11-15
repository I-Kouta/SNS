@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'searchResult','class' => 'post-form']) !!}
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
    @if (auth()->user()->isFollowing($user->id))
    <p class="unFollow-btn"><a href="/{{$user->id}}/unFollow">フォロー解除</a></p>
    @else
    <p class="follow-btn"><a href="/{{$user->id}}/follow">フォローする</a></p>
    @endif
  </div>
  @endif
  @endforeach
</div>

@endsection
