<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>



<div class="content">
    <ul class="contList clearfix">
        <li class="wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: .2s; animation-name: fadeInUp;">
            <a href="company.html"><img src="img/icon01.png" alt="icon01">
                <p>회사소개</p>
            </a>
        </li>
        <li  class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: .4s; animation-name: fadeInUp;">
            <a href="promotion.html"><img src="img/icon02.png" alt="icon02">
                <p>뉴스</p>
            </a>
        </li>
        <li  class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: .6s; animation-name: fadeInUp;">
          <a href="https://www.youtube.com/embed/9zg8NXMo5zw" class="youtube" title="영상">
            <img src="img/banner_btn.png" alt="">
          </a>
          <div class="titleTxt">
          <h2>/ RECIPE</h2>
          <p>동서식품의 제품들을 즐기는 다양한 방법</p>
        </div></li>
        <li onclick="location.href='https://www.maximplant.co.kr:448'" class="wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: .8s; animation-name: fadeInUp;"><div class="titleTxt">
          <h2>/ PLANT</h2>
          <p>도심 속 정원, 숲 속 커피 공장 맥심 브랜드 플래그쉽 스토어</p>
        </div></li>
        <li class="wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
            <a href="promotion.html?ms=2"><img src="img/icon03.png" alt="icon03">
                <p>커피클래스</p>
            </a>
        </li>
        <li class="wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
            <a href="promotion.html?ms=1"><img src="img/icon04.png" alt="icon04">
                <p>웹진</p>
            </a>
        </li>
        <li class="wow fadeInUp" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
            <a href="society.html"><img src="img/icon05.png" alt="icon05">
                <p>사회공헌</p>
            </a>
        </li>
        <li class="wow fadeInUp" data-wow-delay="1.6s" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">
            <a href="company.html?ms=1"><img src="img/icon06.png" alt="icon06">
                <p>연혁</p>
            </a>
        </li>
        <li onclick="location.href='brand.html?ms=1'" class="wow fadeInUp" data-wow-delay="1.8s" style="visibility: visible; animation-delay: 1.8s; animation-name: fadeInUp;"><div class="titleTxt">
          <h2>/ NEW PRODUCT</h2>
          <p>소비자의 니즈를 반영한 동서식품 신제품</p>
        </div></li>
    </ul>
</div> <!-- .content -->



<?php
include_once(G5_THEME_PATH.'/tail.php');
