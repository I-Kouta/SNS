@extends('layouts.login')

@section('content')

{!! Form::open(['class' => 'profile-top']) !!}

<div class="category">
  {{ Form::label('user-name', 'user name', ['class' => 'name']) }}
  {{ Form::text('username',null,['class' => 'input']) }}
</div>
<div class="category">
  {{ Form::label('address', 'mail address', ['class' => 'address']) }}
  {{ Form::text('mail',null,['class' => 'input']) }}
</div>

<div class="category">
  {{ Form::label('password', 'password', ['class' => 'pass']) }}
  {{ Form::password('password',['class' => 'input']) }}
</div>

<div class="category">
  {{ Form::label('password_confirmation', 'password confirm', ['class' => 'pass']) }}
  {{ Form::password('password_confirmation',['class' => 'input']) }}
</div>

<div class="category">
  {{ Form::label('bio', 'bio', ['class' => 'bio']) }}
  {{ Form::password('password_confirmation',['class' => 'input']) }}
</div>

<div class="category last">
  {{ Form::label('icon-image', 'icon image', ['class' => 'icon-image']) }}
  {{ Form::password('password_confirmation',['class' => 'input']) }}
</div>

{{ Form::submit('更新',['class' => 'red-btn']) }}

<!-- <p><a href="/login">ログイン画面へ戻る</a></p> -->

{!! Form::close() !!}

@endsection
