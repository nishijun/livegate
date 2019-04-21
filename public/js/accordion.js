$(function(){
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
});
