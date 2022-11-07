@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'post/create','class' => 'post-form']) !!}
  <div>Follow List</div>
{!! Form::close() !!}

@foreach ($list as $list)
<div class="list">
  <div class="left-list">
    <div>{{ $list->user_name }}</div>
    <div>{{ $list->post }}</div>
  </div>
  <div class="right-list">
    <div>{{ $list->updated_at }}</div>
    @if(Auth::id() == $list->user_id)
    <div class="update-edit">
      <a class="js-modal-open" href="" post="{{ $list->post }}" post_id="{{ $list->id }}"><img src="images/edit.png" width="30" height="30"></a> <!-- これは編集ボタン -->
      <!-- 編集内容が表示される -->
      <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
          {!! Form::open(['url' => '/post/update']) !!}
          {!! Form::hidden('id', $list->id, ['class' => 'modal_id']) !!}
          {!! Form::input('text', 'upPost', $list->post, ['required', 'class' => 'modal_post']) !!}
          <button type="submit"><img src="images/edit.png" width="30" height="30"></button>
          {{ csrf_field() }}
          {!! Form::close() !!}
        </div>
      </div>
      <a href="/post/{{$list->id}}/delete" onclick="return confirm('この投稿を削除します。よろしいでしょうか？')"><img src="images/trash.png" width="30" height="30"></a>
    </div>
    @endif
  </div>
</div>
@endforeach

@endsection
