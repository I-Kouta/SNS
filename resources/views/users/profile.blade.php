@extends('layouts.login')

@section('content')

{!! Form::open() !!}

{{ Form::label('user-name', 'user name', ['class' => 'name']) }}<br />
{{ Form::text('username',null,['class' => 'input']) }}<br />

{{ Form::label('address', 'mail address', ['class' => 'address']) }}<br />
{{ Form::text('mail',null,['class' => 'input']) }}<br />

{{ Form::label('password', 'password', ['class' => 'pass']) }}<br />
{{ Form::password('password',['class' => 'input']) }}<br />

{{ Form::label('password_confirmation', 'password confirm', ['class' => 'pass']) }}<br />
{{ Form::password('password_confirmation',['class' => 'input']) }}<br />

{{ Form::label('bio', 'bio', ['class' => 'bio']) }}<br />
{{ Form::password('password_confirmation',['class' => 'input']) }}<br />

{{ Form::label('icon-image', 'icon image', ['class' => 'icon-image']) }}<br />
{{ Form::password('password_confirmation',['class' => 'input']) }}<br />

{{ Form::submit('REGISTER',['class' => 'red-btn']) }}

<!-- <p><a href="/login">ログイン画面へ戻る</a></p> -->

{!! Form::close() !!}

@endsection
