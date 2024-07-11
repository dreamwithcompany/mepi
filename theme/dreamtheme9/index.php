<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<section id="banner_wrap">
  <div class="swiper-container main_ban_conainer">
        <div class="swiper-wrapper">
          <div class="swiper-slide item">        
              <img class="m_img" src="<?php echo G5_THEME_IMG_URL?>/m_main_img1.png" alt="">
              <img class="pc_img" src="<?php echo G5_THEME_IMG_URL?>/main_img1.png" alt="">
              <p class="txt">
                기술로 미래를 세워갑니다.<br>
                기계설비성능점검(주)
              </p>
          </div>
          <?php 
          /*
            유투브동영상 아이디를 /테마/js/main.js 22번째 라인에 넣어 주세요.
            유투브동영상 아이디는 유투브동영상 url의 v값이 아이디입니다. https://www.youtube.com/watch?v=유투브아이디
          */
          ?>
          <div class="swiper-slide item">        
              <img class="m_img" src="<?php echo G5_THEME_IMG_URL?>/m_main_img2.png" alt="">
              <img class="pc_img" src="<?php echo G5_THEME_IMG_URL?>/main_img2.png" alt="">
              <p class="txt">
                기술로 미래를 세워갑니다.<br>
                기계설비성능점검(주)
              </p>
          </div>
          <!-- <div class="swiper-slide item youtube">
            <div class="youtube-player" id="youtube-player"></div>
            <div class="player-overlay"></div>
            <p class="txt">유튜브 영상이 포함된 슬라이드</p>
          </div> -->
          <div class="swiper-slide item">        
              <img class="m_img" src="<?php echo G5_THEME_IMG_URL?>/m_main_img3.png" alt="">
              <img class="pc_img" src="<?php echo G5_THEME_IMG_URL?>/main_img3.png" alt="">
              <p class="txt">
                기술로 미래를 세워갑니다.<br>
                기계설비성능점검(주)
              </p>
          </div>
        </div>
        <div class="swiper-bottom">
          <div class="progress">
          </div>
          <div class="swiper-navigation">
            <button class="prev"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="next"><i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>
    </div>
</section>

<section id="main_top_box3">
  <div class="main_top_item">
    <ul>
      <li>
        <a href="<?php echo G5_THEME_URL ?>/company/company01_2.php" target="_self">
          <i class="fa fa-building" aria-hidden="true"></i>
          <h2>회사개요</h2>
          <p>기계설비성능점검(주)의 회사개요를<br> 알려드립니다.</p>
        </a>
      </li>
      <li>
        <a href="<?php echo G5_THEME_URL ?>/company/company03_1.php" target="_self">
          <i class="fa fa-list-ul" aria-hidden="true"></i>
          <h2>비전</h2>
          <p>기계설비성능점검(주)의 비전을<br> 알려드립니다.</p>
        </a>
      </li>
      <li>
        <a href="<?php echo G5_THEME_URL ?>/company/company04_3.php" target="_self">
          <i class="fa fa-line-chart" aria-hidden="true"></i>
          <h2>연혁</h2>
          <p>기계설비성능점검(주)의 연혁을<br> 알려드립니다.</p>
        </a>
      </li>
      <li>
        <a href="<?php echo get_pretty_url("performance1")?>" target="_self">
          <i class="fa fa-cubes" aria-hidden="true"></i>
          <h2>사업실적</h2>
          <p>기계설비성능점검(주)의 사업실적을<br> 알려드립니다.</p>
        </a>
      </li>
      <li>
        <a href="<?php echo get_pretty_url("license")?>" target="_self">
          <i class="fa fa-certificate" aria-hidden="true"></i>
          <h2>인증서</h2>
          <p>기계설비성능점검(주)의 인증서를<br> 알려드립니다.</p>
        </a>
      </li>
      <li>
        <a href="<?php echo G5_THEME_URL ?>/company/company06_1.php" target="_self">
          <i class="fa-solid fa-location-dot"></i>
          <h2>오시는길</h2>
          <p>기계설비성능점검(주)의 오시는길을<br> 알려드립니다.</p>
        </a>
      </li>
    </ul>
  </div>
</section>

<section id="por_wrap2">
  <div class="por_inner2">
    <?php
      /* latest_group('스킨명', '테이블명', 목록개수, 제목길이) */
      echo latest('theme/pic_gallery2', 'performance1', 8, 12);
    ?>
  </div>
</section>

<section id="about_wrap2">
  <div class="box">
    <div class="con wow fadeInLeft">
      <div class="tit">
        <h2>ABOUT US</h2>
        <span>기계설비성능점검(주) 방문을 환영합니다.</span>
      </div>
      <div class="txt">
        <p>
          2020년 4월 18일 기계설비법 시행에 의한 10,000m₂이상 건축물(공동주택,복합건축물,일반건축물, 등)의  기계설비 소유자와 관리자는 유지관리기준을 준수 하고, 유지관리에 필요한 서류 작성하고, 성능점검을 실시한 후 그 기록을 관할 관청에 보고 하여야 하며,10년 동안 보관하여야 합니다.<br>
          <br>
          우리 회사는 기계설비성능점검업을 등록하고 우수한 기술인력을 보유하고 있습니다.『(경기도 등록번호 제44호/΄22.10.6)』<br>
          <br>
          적외선카메라 외 20종의 법정 계측장비 및 별도의 최첨단 계측장비를 이용하여 전문적이고 정확한  기계설비성능점검을 실시하여 쾌적하고 안전한 생활환경 조성과 건축물의  사용수명을 연장하고자 합니다.<br>
          <br>
          전 임직원은 건축물 기계설비 성능점검 및 기계설비 유지관리을 위하여 기계설비유지관리자 선임, 파견 및 기계설비 착공 전 확인 & 사용 전 검사 외 컨설팅 고객을 만족시키기 위하여 최선을 다하겠습니다
        </p>
      </div>
      <a href="<?php echo G5_THEME_URL ?>/company/company01_2.php">자세히 보기</a>
    </div>
    <div class="about_img wow fadeInRight">
      <img src="<?php echo G5_THEME_IMG_URL ?>/about_img.png" alt="" class="about_img1"/>
      <img src="<?php echo G5_THEME_IMG_URL ?>/about_img2.png" alt="" class="about_img2"/>
    </div>
  </div>
</section>

<section id="por_wrap">
  <div class="por_inner">
    <?php
      /* latest_group('스킨명', '테이블명', 목록개수, 제목길이) */
      echo latest('theme/pic_gallery', 'report', 8, 12);
    ?>
  </div>
</section>

<section id="community_wrap3">
  <div class="box">
    <div class="con">
      <div class="tit wow fadeInUp">
        <h2>공지사항</h2>
        <span>드림위드컴퍼니의 최근소식입니다.</span>
      </div>
      <div class="txt wow fadeInLeft">
        <?php echo latest("theme/notice","notice", 4,18);?>
      </div>
    </div>
    <div class="con">
      <div class="tit  wow fadeInUp">
        <h2>자료실</h2>
        <span>드림위드컴퍼니의 자료실입니다.</span>
      </div>
      <div class="txt wow fadeInRight">
        <?php echo latest("theme/notice","dataroom", 4,18);?>
      </div>
    </div>
  </div>
</section>

<section id="bottom_wrap3">
  <div class="box">
    <img src="<?php echo G5_THEME_IMG_URL ?>/main_sub11.png" alt=""/>
    <div class="con">
      <h2>온라인문의</h2>
      <p>궁금하신 내용을 남겨주시면 신속하고 정확하게 답변드리겠습니다</p>
      <a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=online">문의하기</a>
    </div>
  </div>
</section> 
<script type="text/javascript" src="<?php echo G5_THEME_URL ?>/js/main.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.php');