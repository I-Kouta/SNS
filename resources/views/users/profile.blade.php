@extends('layouts.login')

@section('content')

{!! Form::open(['class' => 'profile-top']) !!}

<div class="category">
  {{ Form::label('user-name', 'user name', ['class' => 'name']) }}
  {{ Form::text('username',Auth::user()->username,['class' => 'input']) }}
</div>

<div class="category">
  {{ Form::label('address', 'mail address', ['class' => 'address']) }}
  {{ Form::text('mail',Auth::user()->mail,['class' => 'input']) }}
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

<div class="category">
  {{ Form::label('icon-image', 'icon image', ['class' => 'icon-image']) }}
  {{ Form::password('password_confirmation',['class' => 'input file']) }}
</div>

{{ Form::submit('更新',['class' => 'red-btn']) }}

{!! Form::close() !!}

@endsection
