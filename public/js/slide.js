$(function () {
  $('.slide-button').click(function () { // ↓をクリック
    $(this).toggleClass('active'); // ボタンにactiveを追加or削除
    if ($(this).hasClass('active')) {
      $(this).addClass('active');
    } else {
      $(this).removeClass('active');
    }
  });
});
