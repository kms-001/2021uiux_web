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
            <a href="http://ms00.dothome.co.kr/main/bbs/content.php?co_id=company"><img src="<?php echo G5_THEME_IMG_URL?>/icon01.png" alt="icon01">
                <p>회사소개</p>
            </a>
        </li>
        <li  class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: .4s; animation-name: fadeInUp;">
            <a href="http://ms00.dothome.co.kr/main/bbs/board.php?bo_table=promotion01"><img src="<?php echo G5_THEME_IMG_URL?>/icon02.png" alt="icon02">
                <p>뉴스</p>
            </a>
        </li>
        <li  class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: .6s; animation-name: fadeInUp;">
          <a href="https://www.youtube.com/embed/9zg8NXMo5zw" class="youtube" title="영상">
            <img src="<?php echo G5_THEME_IMG_URL?>/banner_btn.png" alt="">
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
            <a href="http://ms00.dothome.co.kr/main/bbs/board.php?bo_table=promotion03"><img src="<?php echo G5_THEME_IMG_URL?>/icon03.png" alt="icon03">
                <p>커피클래스</p>
            </a>
        </li>
        <li class="wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
            <a href="http://ms00.dothome.co.kr/main/bbs/board.php?bo_table=promotion02"><img src="<?php echo G5_THEME_IMG_URL?>/icon04.png" alt="icon04">
                <p>웹진</p>
            </a>
        </li>
        <li class="wow fadeInUp" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
            <a href="http://ms00.dothome.co.kr/main/bbs/content.php?co_id=society"><img src="<?php echo G5_THEME_IMG_URL?>/icon05.png" alt="icon05">
                <p>사회공헌</p>
            </a>
        </li>
        <li class="wow fadeInUp" data-wow-delay="1.6s" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">
            <a href="http://ms00.dothome.co.kr/main/bbs/content.php?co_id=company02"><img src="<?php echo G5_THEME_IMG_URL?>/icon06.png" alt="icon06">
                <p>연혁</p>
            </a>
        </li>
        <li onclick="location.href='brand.html?ms=1'" class="wow fadeInUp" data-wow-delay="1.8s" style="visibility: visible; animation-delay: 1.8s; animation-name: fadeInUp;"><div class="titleTxt">
          <h2>/ NEW PRODUCT</h2>
          <p>소비자의 니즈를 반영한 동서식품 신제품</p>
        </div></li>
    </ul>
</div> <!-- .content -->

<div class="containerWrap">   <!-- 100% -->
    <div class="section1">  <!-- 1240 -->
        <h3>비전</h3>
        <p>VISION 2021</p>
        <ul class="clearfix">
            <li>
                <div class="card">
                    <img src="<?php echo G5_THEME_IMG_URL?>/vicon01.png" alt="화이트" class="img1">
                    <div class="card_body">
                        <h3>연구개발</h3>
                        <p>더 나은 제품을 위한<br> 연구원들의 손길이<br>멈추지 않고 있습니다.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="card">
                    <img src="<?php echo G5_THEME_IMG_URL?>/vicon02.png" alt="화이트" class="img1">
                    <div class="card_body">
                        <h3>최신설비</h3>
                        <p>축적된 기술 노하우와<br>최첨단 생산관리 자동화<br> 시스템을 완비하고 있습니다.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="card">
                    <img src="<?php echo G5_THEME_IMG_URL?>/vicon03.png" alt="화이트" class="img1">
                    <div class="card_body">
                        <h3>유통</h3>
                        <p>물류 체계 개선으로<br>신속·정확·안전하게<br>제품을 전달합니다.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="card">
                    <img src="<?php echo G5_THEME_IMG_URL?>/vicon04.png" alt="화이트" class="img1">
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
                <img src="<?php echo G5_THEME_IMG_URL?>/snsicon.png" alt="facebook" class="faceimg">
            <div class="mainTxt">
                <h1 class="mb10">facebook</h1>
                <p class="mb10">세상의 모든 순간이<br>더욱 행복해지도록</p>
                <p class="mb10">동서식품이<br>최선을 다하겠습니다.</p>
                <p class="mb10">@dongsuh</p>
            </div>
            </a></li>
        <li><a href="#">
            <img src="<?php echo G5_THEME_IMG_URL?>/sns01.png" alt="">
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
                <img src="<?php echo G5_THEME_IMG_URL?>/Path.png" alt="heart">
            </div>
        </a></li>
        <li><a href="#">
            <img src="<?php echo G5_THEME_IMG_URL?>/sns02.png" alt="">
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
                <img src="<?php echo G5_THEME_IMG_URL?>/Path.png" alt="heart">

            </div>
        </a></li>
        <li><a href="#">
            <img src="<?php echo G5_THEME_IMG_URL?>/sns03.png" alt="">
        </a></li>
        <li class="boxTop"><a href="#">
            <div class="snsTxt">
                <p class="hash">#스타벅스RTD #더블샷<br>
                #에스프레소 #크림</p>
                <p>화창한 봄 날씨에<br>
                집중력이 흐트러질 때면<br>
                더블샷 에스프레소&크림으로
                <br>Recharge 해요!<br>
                여러분의 시험공부<br>
                Recharge 아이템은</p>
                <img src="<?php echo G5_THEME_IMG_URL?>/Path.png" alt="heart">
            </div>
        </a></li>
    </ul>
</div> <!-- section2 -->

<div class="latest_wr">
  <!-- 사진 최신글2 { -->
  <?php
  // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
  // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
  // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
  echo latest('theme/news', 'promotion01', 4, 30);		// 최소설치시 자동생성되는 갤러리게시판
  ?>
  <!-- } 사진 최신글2 끝 -->
</div>

<div class="section3">
    <ul class="clearfix" >
        <li class="box1 wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: .4s; animation-name: fadeInRight;">
            <img src="<?php echo G5_THEME_IMG_URL?>/box01.png" alt="icon">
            <h3 class="mb20">Dongsuh History</h3>
            <p class="mb30">식품문화를 꽃피워온<br>
            동서식품의 지난 발자취</p>
            <div class="boxBtn">
                <a href="">자세히보기</a>
            </div>
        </li>
        <li class="box2 wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: .4s; animation-name: fadeInRight;">
            <img src="<?php echo G5_THEME_IMG_URL?>/box02.png" alt="icon">
            <h3 class="mb20">Food Safety</h3>
            <p class="mb30">안전한 식품이야기<br>
            동서식품의 안전센터</p>
            <div class="boxBtn">
                <a href="">자세히보기</a>
            </div>
        </li>
    </ul>
</div> <!-- section3 -->




<?php
include_once(G5_THEME_PATH.'/tail.php');
