$(document).ready(function(){
  $("#5").hide();
  $("#6").hide();
  $("#7").hide();
  $("#8").hide();
  var allImages = $('#slideshow li img').length;
});

function next() {
  $("#1").hide(400);
  $("#5").show(400);
}
