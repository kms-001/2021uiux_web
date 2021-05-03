$(document).ready(function(){
  // 1menu
  // const oneTop = $("#v01s").offset().top;
  // const oneTwo = $("#v02s").offset().top;
  // const oneThree = $("#v03s").offset().top;

  //$(".menu > a").eq(0).on("click",function(){});
    // $(".menu>a").eq(0).click(function(){
    //   $("html,body").animate({scrollTop:oneTop})
    // });
    // $(".menu>a").eq(1).click(function(){
    //   $("html,body").animate({scrollTop:oneTwo})
    // });
    // $(".menu>a").eq(2).click(function(){
    //   $("html,body").animate({scrollTop:oneThree})
    // });

    // for문
    for(let i=0;i< $(".menu>a").length;i++){
      $(".menu>a").eq(i).click(function(){
        $("html,body").animate({scrollTop:$(".scene").eq(i).offset().top;})
      });
    }

    $(".menu>a").click(function(){
      
    });
});
