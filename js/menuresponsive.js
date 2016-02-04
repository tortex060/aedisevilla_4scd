$(document).ready(function(){
  //RESPONSIVE MENU ANIMATION
  var cont = 0;
  $(document).bind("click",function(event){
    if($(event.target).hasClass("img-menu") && cont == 0){
      $(".img-menu").addClass("menu-rotate");
      $('.slide-menu').animate({left: '0'});
      cont = 1;
    }else if($(event.target).hasClass("img-menu") && cont == 1){
      $(".img-menu").removeClass("menu-rotate");
      $('.slide-menu').animate({left:"-100%"});
      cont = 0;
    }
  });
})
