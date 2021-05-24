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
<div class="container">
       <!-- 100% -->
       <div class="section">
           <!-- 1240 -->

           <h3>비전</h3>
           <p>VISION 2021</p>
           <ul class="clearfix">
               <li>
                   <div class="card">
                       <img src="img/vicom01.png" alt="화이트" class="img1">
                       <img src="images/vicom01_1.png" alt="검정" class="img2">
                       <div class="card_body">
                           <h3>연구개발</h3>
                           <p>더 나은 제품을 위한<br> 연구원들의 손길이<br>멈추지 않고 있습니다.</p>
                       </div>
                   </div>
               </li>

               <li>
                   <div class="card">
                       <img src="images/vicon02.png" alt="화이트" class="img1">
                       <img src="images/vicom01_1.png" alt="검정" class="img2">
                       <div class="card_body">
                           <h3>최신설비</h3>
                           <p>축적된 기술 노하우와<br>최첨단 생산관리 자동화<br> 시스템을 완비하고 있습니다.</p>
                       </div>
                   </div>
               </li>

               <li>
                   <div class="card">
                       <img src="images/vicon03.png" alt="화이트" class="img1">
                       <img src="images/vicom01_1.png" alt="검정" class="img2">
                       <div class="card_body">
                           <h3>유통</h3>
                           <p>물류 체계 개선으로<br>신속·정확·안전하게<br>제품을 전달합니다.</p>
                       </div>
                   </div>
               </li>

               <li>
                   <div class="card">
                       <img src="images/vicon04.png" alt="화이트" class="img1">
                       <img src="images/vicom01_1.png" alt="검정" class="img2">
                       <div class="card_body">
                           <h3>환경보존</h3>
                           <p>청정연료 대체,<br>공정 개선 등을 통해 <br>대기오염을 줄이고 있습니다.</p>
                       </div>
                   </div>
               </li>
           </ul>
       </div> <!-- section -->
   </div> <!-- container -->

   <div class="section2">
       <ul class="snsList clearfix">
               <li><a href="#">
                   <img src="images/snsicon.png" alt="facebook" class="faceimg">
               <div class="mainTxt">
                   <h1 class="mb10">facebook</h1>
                   <p class="mb10">세상의 모든 순간이<br>더욱 행복해지도록</p>
                   <p class="mb10">동서식품이<br>최선을 다하겠습니다.</p>
                   <p class="mb10">@dongsuh</p>
               </div>
               </a></li>
           <li><a href="#">
               <img src="images/sns01.png" alt="">
           </a></li>
           <li class="boxBottom"><a href="#">
               <div class="snsTxt">
                   <p class="hash">#카누 #kanu #커피<br>
                   #coffee #카누_인스타그램<br>
                   #카누그램 #카누로그<br>
                   #머그컵 #텀블러 #신제품 </p>
                   <p>카누와 홈 피크닉 떠나요<br>
                   카누 싱글 오리진과<br>
                   링 핸들 텀블러로<br>
                   분위기 UP!</p>
                   <img src="images/Path.png" alt="heart">
               </div>
           </a></li>
           <li><a href="#">
               <img src="images/sns02.png" alt="">
           </a></li>
           <li class="boxTop"><a href="#">
               <div class="snsTxt">
                   <p class="hash">#포스트 #POST #시리얼<br>
                   #CEREAL #아몬드후레이크</p>
                   <p>계속 되는 집콕라이프<br>
                   야무지게 집콕라이프<br>
                   필수템 챙기기<br>
                   저의 최애 집콕 필수템은<br>
                   고소함 충전 <br>
                   아몬드 후레이크 ♥</p>
                   <img src="images/Path.png" alt="heart">

               </div>
           </a></li>
           <li><a href="#">
               <img src="images/sns03.png" alt="">
           </a></li>
           <li class="boxTop"><a href="#">
               <div class="snsTxt">
                   <p class="hash">#스타벅스RTD #더블샷<br>
                   #에스프레소 #크림</p>
                   <p>화창한 봄 날씨에<br>
                   집중력이 흐트러질 때면<br>
                   더블샷 에스프레소&크림으로
                   <br>Recharge 해요!
                   여러분의 시험공부<br>
                   Recharge 아이템은</p>
                   <img src="images/Path.png" alt="heart">
               </div>
           </a></li>
       </ul>
   </div> <!-- section2 -->

   <div class="section3">
       <ul class="clearfix" >
           <li class="box1 wow fadeInLeft" data-wow-delay=".4s" style="visibility: visible; animation-delay: .4s; animation-name: fadeInLeft;">
               <img src="images/box01.png" alt="icon">
               <h3 class="mb20">Dongsuh History</h3>
               <p class="mb30">식품문화를 꽃피워온<br>
               동서식품의 지난 발자취</p>
               <div class="boxBtn">
                   <a href="">자세히보기</a>
               </div>
           </li>
           <li class="box2 wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: .4s; animation-name: fadeInRight;">
               <img src="img/box02.png" alt="icon">
               <h3 class="mb20">Food Safety</h3>
               <p class="mb30">안전한 식품이야기<br>
               동서식품의 안전센터</p>
               <div class="boxBtn">
                   <a href="">자세히보기</a>
               </div>
           </li>
       </ul>
   </div> <!-- section3 -->
