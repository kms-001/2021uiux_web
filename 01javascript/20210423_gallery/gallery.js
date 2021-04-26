$(document).ready(function(){
  $("#thumbnail li").click(function(){
    let t = $(this).index();
    console.log(t);
    $("#image p").hide().eq(t).show();
  });
  let current = 0;

  $(".right").click(function(){
    current = current + 1;
    console.log(current);
  });
  $(".left").click(function(){

  });

});
