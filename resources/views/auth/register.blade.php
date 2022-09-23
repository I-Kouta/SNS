<!-- 新規ユーザー登録画面 -->
@extends('layouts.logout')

@section('content')

{!! Form::open() !!} <!-- HTMLのformの開始タグに相当 -->

<h2>新規ユーザー登録</h2>

{{ Form::label('user-name', 'user name') }} <!-- 'for', '表記される' -->
{{ Form::text('username',null,['class' => 'input', 'placeholder' => 'admin']) }}

{{ Form::label('address'), 'mail address' }}
{{ Form::text('mail',null,['class' => 'input', 'placeholder' => 'admin@atlas.com']) }}

{{ Form::label('password', 'password') }}
{{ Form::password('password',null,['class' => 'input']) }}

{{ Form::label('password', 'password_confirmation') }}
{{ Form::password('password_confirmation',null,['class' => 'input']) }}

{{ Form::submit('REGISTER') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
