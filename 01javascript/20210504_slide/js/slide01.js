$(document).ready(function(){
  // $(".wrapper li").eq(0).animate({left:"-100%"},500);
  // $(".wrapper li").eq(1).animate({left:0},500);

  let current = 0; //현재의 값
  const banner = $(".wrapper li");

  // setInterval(function(){},3000);
  function slider(){
    banner.eq(current).css("left",0).stop().animate({left:"-100%"},1000);
    current++;  //current += 1;
    if(current == 5){current=0}
    // = 대입연산자 == 비교연산자
    // 5번이미지에서 다시 1번이미지로 돌아가게
    banner.eq(current).css({left:"100%"}).stop().animate({left:0},1000)
  }
  setInterval(slider,3000)
  
});
