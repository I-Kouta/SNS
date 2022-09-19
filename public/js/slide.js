$(function () {
  $('.slide-button').click(function () { // ↓をクリック
    $(this).toggleClass('active'); // ボタンにactiveを追加or削除
    if ($(this).hasClass('active')) {
      $('#user-profile ul li').fadeIn().addClass('active');
    } else {
      $('#user-profile ul li').fadeOut().removeClass('active');
    }
  });
});
