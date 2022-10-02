@extends('layouts.login')

@section('content')

<img class="user-image profile-icon" src="images/icon1.png">
{!! Form::open(['url' => '/profile/update','class' => 'profile-top']) !!}

<div class="category">
  {{ Form::label('user-name', 'user name', ['class' => 'name']) }}
  {{ Form::text('username',Auth::user()->username,['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('address', 'mail address', ['class' => 'address']) }}
  {{ Form::text('mail',Auth::user()->mail,['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('password', 'password', ['class' => 'pass']) }}
  {{ Form::password('password',['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('password_confirmation', 'password confirm', ['class' => 'pass']) }}
  {{ Form::password('password_confirmation',['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('bio', 'bio', ['class' => 'bio']) }}
  {{ Form::password('password_confirmation',['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('icon-image', 'icon image', ['class' => 'icon-image']) }}
  {{ Form::file('image', ['class' => 'output file']) }}
</div>

{{ Form::submit('更新',['class' => 'red-btn']) }}

{!! Form::close() !!}

@endsection
