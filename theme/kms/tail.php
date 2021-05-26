<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    <? if(!defined('_INDEX_')) {?>
    <div id="aside">
      <? include_once(G5_THEME_PATH.'/skin/nav/mysubmenu.php');?>
    </div>
  <?}?>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<footer>
    <div class="footerWrap">
        <div class="footerLogo">
            <a href="index.html">
              <img src="img/logo.png" alt="">
            </a>
        </div>
        <div class="footerTxt">
          <div class="txt01">
            <ul class="clearfix">
              <li><a href="">개인정보취급방침</a></li>
              <li><a href="">이용약관</a></li>
              <li><a href="">영상정보처리기기운영관리방침</a></li>
            </ul>
          </div>
          <div class="txt02">
            <p>서울특별시 구로구 구로동 경인로 557 삼영빌딩 4층 / 대표이사: 홍길동</p>
            <p>사업자등록번호: 123-45-67891 / 개인정보책임자:abcdefghi@example.com</p>
            <copyright>Copyrightⓒ 도메인. All rights reserved.</copyright>
          </div>
        </div> <!-- footerTxt -->
   </div> <!-- footerWrap -->
</footer>
<? if(defined('_INDEX_')) {?>
  <div class="top view">TOP</div>
<script>
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
</script>
        <?} ?>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
