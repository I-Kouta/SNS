<!-- 新規ユーザー登録画面 -->
@extends('layouts.logout')

@section('content')

{!! Form::open() !!} <!-- HTMLのformの開始タグに相当 -->

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input', 'placeholder' => 'admin']) }}

{{ Form::label('メールアドレス') }}
{{ Form::text('mail',null,['class' => 'input', 'placeholder' => 'admin@atlas.com']) }}

{{ Form::label('パスワード') }}
{{ Form::password('password',null,['class' => 'input']) }}

{{ Form::label('パスワード確認') }}
{{ Form::password('password_confirmation',null,['class' => 'input']) }}

{{ Form::submit('REGISTER') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
