$(document).ready(function(){
     $("#thumbnail li").click(function(){
       let t = $(this).index();
       console.log(t);
       $("#image p").hide().eq(t).show();
     });

     let current = 0;

     $(".right").click(function(){
       //current = current + 1;
       current++;
       if(current == 3){ current = 2;}
       console.log(current);
       imgMove();
     });
     $(".left").click(function(){
       //current = current - 1;
       current--;
       if(current == -1){current = 0}
       console.log(current);
       imgMove();
     });

     function imgMove(){
       let cNum = current * -1 * 760;
       //$(".container>ul").css("left",cNum)
       $(".container>ul").stop().animate({left:cNum},1000);
     }

   });
