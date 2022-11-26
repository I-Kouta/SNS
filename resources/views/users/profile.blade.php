@extends('layouts.login')

@section('content')

@foreach ($user as $user)
<img class="user-image profile-icon" src="{{ asset('images/icon1.png') }}">

{!! Form::open(['url' => '/profile/update','class' => 'profile-top']) !!}
<div class="category">
  {{ Form::label('user-name', 'user name', ['class' => 'name']) }}
  {{ Form::input('username', 'UpUserName', $user->username,['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('address', 'mail address', ['class' => 'address']) }}
  {{ Form::input('mail', 'UpMail', $user->mail,['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('password', 'password', ['class' => 'pass']) }}
  {{ Form::password('password', ['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('password_confirmation', 'password confirm', ['class' => 'pass']) }}
  {{ Form::password('password_confirmation',['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('bio', 'bio', ['class' => 'bio']) }}
  {{ Form::input('bio', 'UpBio', $user->bio,['class' => 'output']) }}
</div>

<div class="category">
  {{ Form::label('icon-image', 'icon image', ['class' => 'icon-image']) }}
  {{ Form::file('image', ['class' => 'output file']) }}
</div>
{{ Form::submit('更新',['class' => 'red-btn']) }}
{!! Form::close() !!}
@endforeach

@endsection
