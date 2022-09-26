@extends('layouts.login')

@section('content')

{!! Form::open(['class' => 'profile-top']) !!}

{{ Form::label('user-name', 'user name', ['class' => 'name']) }}
{{ Form::text('username',null,['class' => 'input']) }}<br />

{{ Form::label('address', 'mail address', ['class' => 'address']) }}
{{ Form::text('mail',null,['class' => 'input']) }}<br />

{{ Form::label('password', 'password', ['class' => 'pass']) }}
{{ Form::password('password',['class' => 'input']) }}<br />

{{ Form::label('password_confirmation', 'password confirm', ['class' => 'pass']) }}
{{ Form::password('password_confirmation',['class' => 'input']) }}<br />

{{ Form::label('bio', 'bio', ['class' => 'bio']) }}
{{ Form::password('password_confirmation',['class' => 'input']) }}<br />

{{ Form::label('icon-image', 'icon image', ['class' => 'icon-image']) }}
{{ Form::password('password_confirmation',['class' => 'input']) }}<br />

{{ Form::submit('更新',['class' => 'red-btn']) }}

<!-- <p><a href="/login">ログイン画面へ戻る</a></p> -->

{!! Form::close() !!}

@endsection
