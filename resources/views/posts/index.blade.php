<!-- ログイン時のトップ画面 -->
<!-- 未ログイン時は遷移できたらダメ -->
@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'post/create','class' => 'post-form']) !!}

<div class="tweet-form">
  <img class="form-icon" src="images/icon1.png" width="35" height="35">
  {{ Form::input('text', 'newPost', null, ['required', 'class' => 'tweet', 'placeholder' => '投稿内容を入力してください', 'maxlength' => '150']) }}
  <button type="submit"><img src="images/post.png" width="100" height="100"></button>
</div>

{!! Form::close() !!}

<div class='table'>
  @foreach ($list as $list)
  <div class="list">
    <div class="left-list">
      <div>{{ $list->user_name }}</div>
      <div>{{ $list->post }}</div>
    </div>
    <div class="right-list">
      <div>{{ $list->created_at }}</div>
      @if(Auth::id() == $list->user_id)
      <div class="update-edit">
        <a class="js-modal-open" href="" post="{{ $list->post }}" post_id="{{ $list->id }}"><img src="images/edit.png" width="30" height="30"></a>
        <!-- 編集内容が表示される -->
        <div class="modal js-modal">
          <div class="modal__bg js-modal-close"></div>
          <div class="modal__content">
            <form action="" method="">
              <textarea name="" class="modal_post"></textarea>
              <input type="hidden" name="" class="modal_id" value="">
              <input type="submit" value="更新">
                {{ csrf_field() }}
              </form>
              <a class="js-modal-close" href="">閉じる</a>
            </div>
          </div>
        <!-- 編集内容が表示される -->
        <a href="/post/{{$list->id}}/delete" onclick="return confirm('この投稿を削除します。よろしいでしょうか？')"><img src="images/trash.png" width="30" height="30"></a>
      </div>
      @endif
    </div>
  </div>
  @endforeach
</div>

@endsection
