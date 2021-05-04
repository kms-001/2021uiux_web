// alert("확인") 연결 잘되었는지 확인하는 방법

$(document).ready(function(){
  $(".wrapper li").eq(0).animate({left:"-100%"},1000)
  $(".wrapper li").eq(1).animate({left:0},1000)
});
