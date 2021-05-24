<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>


<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
      <footer>
        <hr style="width:100%">
          <div class="footerWrap clearfix">
              <div class="footerLogo">
                  <a href="index.html">
                    <img src="images/logo.png" alt="logo">
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

        <div class="top view">TOP</div>
        <?php
        //공지사항
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/notice', 'notice', 4, 13);
        ?>

		<?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
	</div>
        <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
        <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>



</div>

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
