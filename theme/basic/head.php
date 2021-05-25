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
<script>
  new WOW().init();
</script>
<style >
  #gnb h1 {float:left}
  #gnb #gnb_1dul {float:right;}
</style>
        <nav id="gnb">

        <h2>메인메뉴</h2>
        <div class="gnb_wrap">


          <h1><img src="<?echo G5_THEME_IMG_URL ?>/logo.png"></h1>
            <ul id="gnb_1dul">

                <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                ?>

                <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue;

                        if($k == 0)
                            echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul></div>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>

        </div>
    </nav>



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

    <? if(!defined('_INDEX_')){?>
<div class="subVisual">
  <div class="subImg" id="page_title">
<div class="title">
  <h2 class="loc1D"></h2>
</div>
  </div>
</div>
<script>
  window.onload = function(){
    const menuDep = $(".loc1D").html(); // get
    console.log("현재위치"+ menuDep);
    if(menuDep == "회사소개"){
      $(".subVisual .txt").html("생활 속에 향기를 드리는 기업, 동서식품")
    }
    if(menuDep == "제품안내"){
      $(".subVisual .txt").html("생활 속에 향기를 드리는 기업, 동서식품")
    }
    if(menuDep == "홍보센터"){
      $(".subVisual .txt").html("생활 속에 향기를 드리는 기업, 동서식품")
    }
    if(menuDep == "사회공헌"){
      $(".subVisual .txt").html("생활 속에 향기를 드리는 기업, 동서식품")
    }
    if(menuDep == "고객의소리"){
      $(".subVisual .txt").html("생활 속에 향기를 드리는 기업, 동서식품")
    }
  };


</script>
<?}?>
<!-- } 상단 끝 -->
<hr>
<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr"> <!-- 1200px -->


    <div id="container" <? if(defined('_INDEX_')) {?> style="width:1200px"<?}?>> <!-- 930px -->
        <?php if (!defined("_INDEX_")) { ?>
            <div> H > <span class="loc1D"></span> > <?php echo get_text($g5['title']); ?></div>
          <h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2>

        <?php }?>
<!-- 콘텐츠 시작 { -->
