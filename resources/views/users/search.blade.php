@extends('layouts.login')

@section('content')

<div class="post-form">
  {{ Form::input('text', 'newPost', null, ['required', 'class' => 'search', 'placeholder' => 'ユーザー名']) }}
  <button type="submit"><img src="images/post.png" width="100" height="100"></button>
</div>

@endsection
