// 슬라이더
$(document).ready(function(){
  $(".slider").bxSlider({
    pager:false,
  });

// 햄버거 메뉴
  $(".toggleMenu").click(function(){
    const toggle = $(".toggleMenu").attr("class");
    if(toggle == "toggleMenu"){
    $(".toggleMenu").addClass("change");
    $("#main_menu").stop().animate({left:0});

  }else{
    $(".toggleMenu").removeClass("change");
    $("#main_menu").stop().animate({left:"-100%"});
  }
  });

  $(window).resize(function(){
    $("#main_menu").removeAttr("style");
    $(".toggleMenu").removeClass("change");
  });

// 탭 메뉴
  let num = location.href.indexOf("=") + 1;
  let string = location.href.substring(num);
  console.log(string);

  if( location.href.indexOf("=") > 0 ){
     view(string);
  }else{
     view(0)
  }

  function view(menu){
        $(".gnb li").removeClass("active").eq(menu).addClass("active");
        $(".boxWrap>div").hide().eq(menu).fadeIn();
  }
  $(".gnb li").click(function(){
     var menu = $(this).index();
     view(menu);
  });

// top
  const topPos = $(".top").offset().top;
  $(window).scroll(function(){
    let scrollY = $(window).scrollTop();
    if(scrollY > $(window).innerHeight()/2){
      $(".top").addClass("view");
    }else{
      $(".top").removeClass("view");
    }
  });

  $(".top").click(function(){
    $("html,body").animate({scrollTop:0},1000);
  });

// 영상
  $(".youtube").colorbox({
    iframe:true,
    innerWidth:700,
    innerHeight:393.75
  });


});
