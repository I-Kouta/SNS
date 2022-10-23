$(function () {
  $('.slide-button').click(function () { // ↓をクリック
    $(this).toggleClass('active'); // ボタンにactiveを追加or削除
    if ($(this).hasClass('active')) {
      $('#user-profile ul li').fadeIn().addClass('active');
    } else {
      $('#user-profile ul li').fadeOut().removeClass('active');
    }
  });

  $('.js-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    var post = $(this).attr('post'); // $post = と同義
    var post_id = $(this).attr('post_id');
    $('.modal_post').text(post); // 投稿内容を取得
    $('.modal_id').val(post_id); // 投稿に紐づいているidの取得
    return false;
  });

  $('.js-modal-close').on('click',function(){
        // モーダルの中身(class="js-modal")を非表示
        $('.js-modal').fadeOut();
        return false;
    });
});
