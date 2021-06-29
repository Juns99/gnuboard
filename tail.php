<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
<?php if(!defined('_INDEX_')) { ?>
</div>
<?php } ?>

<?php if($bo_table) {?>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php }?>

    <footer class="py-5 ft_area">
		<div class="container footer">
			<div class="row">
				<!-- <div class="col-md-3 text-white text-left">
					<h2>ETY.KR</h2>
					<p>
					무료테마배포 <a href="http://ety.kr" target="_blank">에티테마</a>
					</p>
					<p class="text-center">
						<div class="sns_icon">
						<a href="https://www.youtube.com/channel/UC8dWZEBrCxXbAZKmgrHhtQw" target="_blank"><i class="fab fa-facebook-f"></i></a>
						</div>
						<div class="sns_icon">
						<a href="https://www.youtube.com/channel/UC8dWZEBrCxXbAZKmgrHhtQw" target="_blank"><i class="fab fa-twitter"></i></a>
						</div>
						<div class="sns_icon">
						<a href="https://www.youtube.com/channel/UC8dWZEBrCxXbAZKmgrHhtQw"><i class="fab fa-instagram"></i></a>
						</div>
					</p>
				</div> -->
				<div class="col-md-12 text-white text-left ft_company">
          <ul>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">서비스이용약관</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=free"><strong>개인정보처리방침</strong></a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery">병원소개</a></li>
					</ul>
				</div>
				<div class="col-md-6 text-white text-left">
					<p>
						경기도 고양시 덕양구 화신로272번길 5 탑케어동물의료원 <br>
						Copyright © NCS UX/UI 웹퍼블리셔/웹디자이너 과정 문준성의 포트폴리오 - 원 브랜드/기업과는 무관한 페이지입니다
          </p>
        </div>
        <div class="col-md-6 text-white text-right sns">
          <p>010-8851-8505</p>
          <ul>
            <li><a href="https://pf.kakao.com/_CxaxgDxb"><i class="xi-kakaotalk xi-2x"></i></a></li>
            <li><a href="https://www.instagram.com/topcareamc_grooming/"><i class="xi-instagram xi-2x"></i></a></li>
            <li><a href="https://blog.naver.com/topcareamc"><img src="/gnu/theme/ety_theme_company_v1.2/img/blog.png"></img></a></li>
            <li><a href="https://www.youtube.com/channel/UCfSAYwwNtTOqDbzXyYzhQNg"><i class="xi-youtube-play xi-2x"></i></a></li>
          </ul>
        </div>
			</div>
		</div><!--/container-->
    </footer>
	<div class="container-fluid bg-gray">
		<div class="col-md-12 text-white text-center">
				Copyright 2019 &copy; <a href="http://ety.kr" target="_blank">HTTP://ety.kr</a>
		</div>
	</div><!-- /container -->


    <script src="<?php echo G5_THEME_URL?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/parallax/js/parallax.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/owlcarousel/js/owl.carousel.min.js"></script>
	<!-- countdown -->
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/kinetic.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/jquery.final-countdown.js"></script>
	<!-- <script type="text/javascript" src="<?php //echo G5_THEME_URL?>/js/bootstrap-dropdownhover.js"></script> -->
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/custom.js"></script>
	<script>
		 $('.parallax-window').parallax({imageSrc: '/gnu/theme/ety_theme_company_v1.2/img/ft-img22.jpg'});
	</script>
	<script>
		$(document).ready(function () {
			//owl
      <?php if(defined('_INDEX_')) { ?>
			$("#mainBannerSlider").owlCarousel({
				loop:true,
				margin:0,
				nav:true,
        autoplay:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});
<?php } ?>

		});
	</script>


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
?>
