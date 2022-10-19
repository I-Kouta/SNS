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
    var post = $(this).attr('post');
    var post_id = $(this).attr('post_id');
    $('.modal_post').text(post); // 投稿内容を取得
    $('.modal_id').val(post_id); // 投稿に紐づいているidの取得
    return false;
  });

  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut(); // 中身をフェードアウト
    return false;
  });
});
