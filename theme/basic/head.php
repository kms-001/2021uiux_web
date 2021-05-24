<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->

    <header>
      <div id="hd_wrapper">
        <div id="header" class="clearfix">
        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <nav id="main_menu">
        <ul class="clearfix">
            <li class="main_txt"><a href="company.html">회사소개</a>
              <ul class="sub_menu">
                  <li><a href="company.html?ms=0">동서식품 소개</a></li>
                  <li><a href="company.html?ms=1">부문역량</a></li>
                  <li><a href="company.html?ms=2">오시는길</a></li>
              </ul>
            </li>
            <li class="main_txt"><a href="brand.html">제품안내</a>
              <ul class="sub_menu">
                  <li><a href="brand.html?ms=0">브랜드</a></li>
                  <li><a href="brand.html?ms=1">제품소개</a></li>
              </ul>
            </li>
            <li class="main_txt"><a href="promotion.html">홍보센터</a>
              <ul class="sub_menu">
                  <li><a href="promotion.html?ms=0">뉴스</a></li>
                  <li><a href="promotion.html?ms=1">웹진삶의향기</a></li>
                  <li><a href="promotion.html?ms=2">커피클래스</a></li>
              </ul>
            </li>
            <li class="main_txt"><a href="society.html">사회공헌</a>
              <ul class="sub_menu">
                  <li><a href="society.html?ms=0">동서문학상</a></li>
                  <li><a href="society.html?ms=1">사랑의향기</a></li>
                  <li><a href="society.html?ms=2">꿈의도서관</a></li>
              </ul>
            </li>
            <li class="main_txt"><a href="cs.html">고객의소리</a>
              <ul class="sub_menu">
                  <li><a href="cs.html?ms=0">FAQ</a></li>
                  <li><a href="cs.html?ms=1">일반문의</a></li>
                  <li><a href="cs.html?ms=2">불편사항</a></li>
              </ul>
            </li>
        </ul>
      </nav>
      </div>
    </div>
    <? if(defined('_INDEX_')) {?>
    <div class="sliderWrap">
    <ul class="slider clearfix">
        <li class="slider1st">
            <div class="slider_txt">
                <h1>Dongsuh Foods</h1>
                <p>세상의 모든 순간이 더욱 행복해지도록<br>동서식품이 최선을 다하겠습니다. </p>
            </div>
        </li>
        <li class="slider2st">
            <div class="slider_txt">
                <h1>Dongsuh Foods</h1>
                <p>세상의 모든 순간이 더욱 행복해지도록<br>동서식품이 최선을 다하겠습니다. </p>
            </div>
        </li>
    </ul>
    </div> <!-- .sliderWrap -->
    <script>
      $(document).ready(function(){
        $(".slider").bxSlider({
         pager:false,
         controls:false
        });
       });
    </script>
      <?} ?>
    </header>
<!-- } 상단 끝 -->
<hr>

<!-- 콘텐츠 시작 { -->
