$(function(){
// アコーディオン
$("#switch").click(function() {
  if($(".comment_area").hasClass("active")) {
    $(".comment_area").slideUp();
    $(".comment_area").removeClass("active");
    $("#changer").removeClass("rotate");
  } else {
    $(".comment_area").slideDown();
    $(".comment_area").addClass("active");
    $("#changer").addClass("rotate");
  }
});

// スムーズスクロール
$('a[href^="#"]').click(function(){
    let speed = 500;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
