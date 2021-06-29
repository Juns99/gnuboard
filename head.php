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

if($bo_table) {
	$E_bo = sql_fetch("SELECT * FROM g5_board where bo_table ='$bo_table'");
}
// 오늘 새글
function bo_count($bo){
	$cnt = 0;
	foreach (func_get_args() as $bo) {
		$table = "g5_write_".$bo;
		$sql = "select count(*) cnt from $table where wr_datetime >= CURRENT_DATE() and wr_is_comment=0";
		$row = sql_fetch($sql);
		$cnt += $row['cnt'];
	}
	return $cnt;;
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-------------------------- 네비게이션 -------------------------->
<div class="container-fluid top-line fixed-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="tnb-left">
					<!-- social -->
					<div class="sns_icon">
					<a href="https://www.facebook.com/leejongo" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</div>
					<div class="sns_icon">
					<a href="#"><i class="fab fa-twitter"></i></a>
					</div>
					<div class="sns_icon">
					<a href="https://www.instagram.com/site_developer" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
				<div id="tnb">
					<ul>
					<?php if($is_member) { ?>
						<li><a href="<?php echo G5_URL?>/bbs/logout.php">로그아웃</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
					<?php }else{ ?>
						<li><a href="<?php echo G5_URL?>/bbs/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/login.php"><i class="fas fa-sign-in-alt"></i> 로그인</a></li>
					<?php }?>
						<li><a href="<?php echo G5_URL?>/bbs/faq.php"><i class="fa fa-question" aria-hidden="true"></i> <span>FAQ</span></a></li>
						<li><a href="<?php echo G5_URL?>/bbs/qalist.php"><i class="fa fa-comments" aria-hidden="true"></i> <span>1:1문의</span></a></li>
						<li><a href="<?php echo G5_URL?>/bbs/current_connect.php" class="visit"><i class="fa fa-users" aria-hidden="true"></i> <span>접속자</span><strong class="visit-num">
						1</strong></a></li>
						<li><a href="<?php echo G5_URL?>/bbs/new.php"><i class="fa fa-history" aria-hidden="true"></i> <span>새글</span></a></li>
						<?php if($is_admin) { ?>
						<li><a href="<?php echo G5_URL?>/adm">관리자</a></li>
						<?php } ?>
					</ul>
				</div>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
</div>

<nav id="top_scroll" class="navbar fixed-top navbar-expand-lg navbar-white fixed-top">
  <div class="innerFlex">
	<a class="navbar-brand logo_" href="<?php echo G5_URL?>" class="logo"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 252.1 60.15" enable-background:"new 0 0 252.1 60.15;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fff;}
	.st1{fill:#fff;}
	.st2{fill:#315C6F;}
</style>
<g>
	<g>
		<path class="st0" d="M67.09,18.22h9.23v2.65h-9.23v1.82h11.44v2.76H63.81v-11.8h13.03v2.76h-9.75V18.22z M68.39,28.83h11.75v-1.77
			h3.33v8.81H65.06v-8.81h3.33V28.83z M80.14,31.53H68.39v1.59h11.75V31.53z M86.3,20.9h-2.83v5.12h-3.38V13.05h3.38v4.94h2.83V20.9
			z"/>
		<path class="st1" d="M88.15,14.01h9.96l-1.46,8.29h3.43v-9.15h3.17v22.33h-3.17V25.16h-3.95l-1.66,9.52h-3.25l1.72-9.8h-5.04
			v-2.76h5.54l0.94-5.3h-6.21V14.01z M105.18,13.05h3.28v22.7h-3.28V13.05z"/>
		<path class="st1" d="M124.86,28.57c0,0.99-0.15,1.88-0.46,2.68c-0.3,0.8-0.74,1.48-1.3,2.04c-0.56,0.56-1.24,1-2.03,1.3
			c-0.79,0.3-1.66,0.46-2.61,0.46c-0.97,0-1.85-0.15-2.63-0.46c-0.78-0.3-1.45-0.74-2.01-1.3c-0.56-0.56-1-1.24-1.3-2.04
			c-0.3-0.8-0.46-1.69-0.46-2.68v-8.71c0-0.99,0.15-1.88,0.46-2.68c0.3-0.8,0.74-1.48,1.3-2.04c0.56-0.56,1.24-1,2.01-1.3
			c0.78-0.3,1.66-0.46,2.63-0.46c0.95,0,1.82,0.15,2.61,0.46c0.79,0.3,1.46,0.74,2.03,1.3c0.56,0.56,1,1.24,1.3,2.04
			c0.3,0.8,0.46,1.69,0.46,2.68V28.57z M115.34,28.57c0,1.16,0.27,2.05,0.82,2.68s1.31,0.94,2.3,0.94c0.99,0,1.75-0.31,2.3-0.94
			c0.55-0.62,0.82-1.52,0.82-2.68v-8.71c0-1.16-0.27-2.05-0.82-2.68c-0.55-0.62-1.31-0.94-2.3-0.94c-0.99,0-1.75,0.31-2.3,0.94
			s-0.82,1.52-0.82,2.68V28.57z M125.9,22.28h2.96v-9.23h3.38v22.7h-3.38V25.19h-2.96V22.28z"/>
		<path class="st1" d="M155.67,21.29h-7.77v2.21h9.33v2.81h-22.05V23.5h9.33v-2.21h-7.64v-7.77h18.67v2.73H140.2v2.31h15.47V21.29z
			 M136.35,31.95c0-0.61,0.12-1.16,0.35-1.65s0.56-0.92,0.97-1.27c0.42-0.35,0.91-0.63,1.48-0.82s1.19-0.29,1.85-0.29h10.4
			c0.66,0,1.27,0.1,1.85,0.29s1.07,0.46,1.48,0.82c0.42,0.36,0.74,0.78,0.97,1.27s0.35,1.04,0.35,1.65s-0.12,1.16-0.35,1.66
			c-0.23,0.5-0.56,0.93-0.97,1.27s-0.91,0.62-1.48,0.81c-0.57,0.19-1.19,0.29-1.85,0.29H141c-0.66,0-1.27-0.09-1.85-0.29
			c-0.57-0.19-1.07-0.46-1.48-0.81s-0.74-0.77-0.97-1.27C136.47,33.11,136.35,32.55,136.35,31.95z M139.68,31.95
			c0,0.42,0.13,0.74,0.4,0.97s0.63,0.35,1.08,0.35h10.09c0.45,0,0.81-0.12,1.08-0.35s0.4-0.56,0.4-0.97s-0.13-0.74-0.4-0.98
			c-0.27-0.23-0.63-0.35-1.08-0.35h-10.09c-0.45,0-0.81,0.12-1.08,0.35C139.81,31.21,139.68,31.53,139.68,31.95z"/>
		<path class="st1" d="M164.07,32.29v1.2h15.65v2.5h-18.93v-6.06h15.39v-1.17h-15.39v-2.5h7.64v-1.43h-9.33v-2.7h22.05v2.7h-9.33
			v1.43h7.64v6.03H164.07z M160.79,13.41h18.67v7.46h-18.67V13.41z M176.18,18.22v-2.16h-12.12v2.16H176.18z"/>
		<path class="st1" d="M199.45,31.35v2.96h-16.3v-2.96H199.45z M191.03,27.5c-0.99,0-1.91-0.17-2.77-0.52
			c-0.86-0.35-1.61-0.83-2.25-1.46c-0.64-0.62-1.14-1.37-1.51-2.25c-0.36-0.88-0.55-1.84-0.55-2.9c0-1.06,0.18-2.02,0.55-2.9
			c0.36-0.88,0.87-1.63,1.51-2.25s1.39-1.11,2.25-1.46c0.86-0.35,1.78-0.52,2.77-0.52c0.99,0,1.91,0.17,2.77,0.52
			c0.86,0.35,1.61,0.83,2.25,1.46s1.14,1.37,1.51,2.25c0.36,0.88,0.55,1.84,0.55,2.9c0,1.06-0.18,2.02-0.55,2.9
			c-0.36,0.88-0.87,1.63-1.51,2.25c-0.64,0.62-1.39,1.11-2.25,1.46C192.94,27.33,192.02,27.5,191.03,27.5z M191.03,24.64
			c0.57,0,1.09-0.1,1.55-0.3c0.46-0.2,0.86-0.49,1.2-0.86c0.34-0.37,0.6-0.82,0.78-1.34c0.18-0.52,0.27-1.11,0.27-1.77
			c0-0.64-0.09-1.23-0.27-1.75c-0.18-0.53-0.44-0.98-0.78-1.35c-0.34-0.37-0.74-0.66-1.2-0.86c-0.46-0.2-0.98-0.3-1.55-0.3
			c-0.57,0-1.09,0.1-1.55,0.3c-0.46,0.2-0.86,0.49-1.2,0.86c-0.34,0.37-0.6,0.82-0.78,1.35c-0.18,0.53-0.27,1.11-0.27,1.75
			c0,0.66,0.09,1.25,0.27,1.77c0.18,0.52,0.44,0.97,0.78,1.34c0.34,0.37,0.74,0.66,1.2,0.86C189.94,24.54,190.46,24.64,191.03,24.64
			z M200.49,13.05h3.38v22.7h-3.38V13.05z"/>
		<path class="st1" d="M211.91,22.09v2.76h15.52v2.86h-3.35v3.87h4.91v2.96h-22.05v-2.96h4.91v-3.87h-3.22v-8.35h15.39v-2.73h-15.39
			v-2.86h18.67v8.32H211.91z M215.13,31.58h5.67v-3.87h-5.67V31.58z"/>
		<path class="st1" d="M237.33,30.18l0.36-3.82h-6.71v-2.81h16.3v2.81h-6.32l-0.36,3.82H237.33z M231.64,17.73
			c0-0.64,0.12-1.23,0.35-1.75c0.23-0.53,0.56-0.98,0.97-1.35c0.42-0.37,0.91-0.66,1.48-0.86c0.57-0.2,1.19-0.3,1.85-0.3h4.37
			c0.66,0,1.27,0.1,1.85,0.3s1.07,0.49,1.48,0.86c0.42,0.37,0.74,0.82,0.97,1.35s0.35,1.11,0.35,1.75c0,0.64-0.12,1.23-0.35,1.75
			c-0.23,0.53-0.56,0.98-0.97,1.35s-0.91,0.66-1.48,0.86c-0.57,0.2-1.19,0.3-1.85,0.3h-4.37c-0.66,0-1.27-0.1-1.85-0.3
			c-0.57-0.2-1.07-0.48-1.48-0.86s-0.74-0.82-0.97-1.35C231.76,18.95,231.64,18.37,231.64,17.73z M233.04,29.09h3.38v3.9h15.68v2.76
			h-19.06V29.09z M234.92,17.73c0,0.5,0.14,0.9,0.43,1.18s0.65,0.43,1.11,0.43h4.06c0.45,0,0.82-0.14,1.1-0.43
			c0.29-0.29,0.43-0.68,0.43-1.18c0-0.5-0.14-0.9-0.43-1.18c-0.29-0.29-0.65-0.43-1.1-0.43h-4.06c-0.45,0-0.82,0.14-1.11,0.43
			C235.06,16.83,234.92,17.22,234.92,17.73z M251.71,30.44h-3.38v-11h-2.37v-2.81h2.37v-3.59h3.38V30.44z"/>
	</g>
	<g>
		<path class="st2" d="M90.33,47.79h-1.39l-0.91-1.43h-3.89l-0.92,1.43h-1.38l3.65-5.59h1.31L90.33,47.79z M87.54,45.59l-1.45-2.31
			l-1.46,2.31H87.54z"/>
		<path class="st2" d="M98.22,47.79h-1.44l-3.84-4.19v4.19h-1.3V42.2h1.38l3.9,4.26V42.2h1.3V47.79z"/>
		<path class="st2" d="M101.61,47.76h-1.32v-5.55h1.32V47.76z"/>
		<path class="st2" d="M112.82,47.79h-1.28v-4.33l-2.72,4.29h-1.06l-2.82-4.29v4.33h-1.3V42.2h1.73l2.9,4.45l2.82-4.45h1.73V47.79z"
			/>
		<path class="st2" d="M122.84,47.79h-1.39l-0.91-1.43h-3.89l-0.92,1.43h-1.38l3.65-5.59h1.31L122.84,47.79z M120.05,45.59
			l-1.45-2.31l-1.46,2.31H120.05z"/>
		<path class="st2" d="M128.66,47.76h-4.51v-5.55h1.3v4.78h3.22V47.76z"/>
		<path class="st2" d="M142.58,47.79h-1.28v-4.33l-2.72,4.29h-1.06l-2.82-4.29v4.33h-1.3V42.2h1.73l2.9,4.45l2.82-4.45h1.73V47.79z"
			/>
		<path class="st2" d="M149.57,47.79h-4.56V42.2h4.43v0.76h-3.12v1.56h2.95v0.77h-2.95v1.73h3.25V47.79z"/>
		<path class="st2" d="M151.53,42.21h2.27c1.5,0,2.64,0.26,3.4,0.78c0.68,0.47,1.02,1.13,1.02,1.98c0,0.96-0.49,1.68-1.46,2.15
			c-0.86,0.43-2.04,0.64-3.56,0.64h-1.66V42.21z M152.84,46.99h0.43c2.43,0,3.65-0.68,3.65-2.04c0-1.31-1.04-1.97-3.12-1.97h-0.96
			V46.99z"/>
		<path class="st2" d="M161.45,47.76h-1.32v-5.55h1.32V47.76z"/>
		<path class="st2" d="M169.73,47.63c-0.45,0.16-1.15,0.23-2.1,0.23c-1.37,0-2.46-0.26-3.28-0.78c-0.81-0.53-1.21-1.23-1.21-2.09
			c0-0.86,0.41-1.55,1.24-2.08c0.82-0.53,1.91-0.79,3.25-0.79c0.98,0,1.68,0.07,2.1,0.2l-0.1,0.76c-0.54-0.13-1.21-0.2-2-0.2
			c-0.97,0-1.74,0.19-2.32,0.58c-0.58,0.39-0.86,0.9-0.86,1.52c0,0.65,0.28,1.16,0.84,1.53c0.57,0.39,1.35,0.58,2.34,0.58
			c0.84,0,1.51-0.08,2-0.25L169.73,47.63z"/>
		<path class="st2" d="M179.78,47.79h-1.39l-0.91-1.43h-3.89l-0.92,1.43h-1.38l3.65-5.59h1.31L179.78,47.79z M176.99,45.59
			l-1.45-2.31l-1.46,2.31H176.99z"/>
		<path class="st2" d="M185.6,47.76h-4.51v-5.55h1.3v4.78h3.22V47.76z"/>
		<path class="st2" d="M196.59,47.63c-0.45,0.16-1.15,0.23-2.1,0.23c-1.37,0-2.46-0.26-3.28-0.78c-0.81-0.53-1.21-1.23-1.21-2.09
			c0-0.86,0.41-1.55,1.24-2.08c0.82-0.53,1.91-0.79,3.25-0.79c0.98,0,1.68,0.07,2.1,0.2l-0.1,0.76c-0.54-0.13-1.21-0.2-2-0.2
			c-0.97,0-1.74,0.19-2.32,0.58c-0.58,0.39-0.86,0.9-0.86,1.52c0,0.65,0.28,1.16,0.84,1.53c0.57,0.39,1.35,0.58,2.34,0.58
			c0.84,0,1.51-0.08,2-0.25L196.59,47.63z"/>
		<path class="st2" d="M203.61,47.79h-4.56V42.2h4.43v0.76h-3.12v1.56h2.95v0.77h-2.95v1.73h3.25V47.79z"/>
		<path class="st2" d="M212.1,47.79h-1.44l-3.84-4.19v4.19h-1.3V42.2h1.38l3.9,4.26V42.2h1.3V47.79z"/>
		<path class="st2" d="M219.57,42.95h-2.44v4.81h-1.31v-4.81h-2.42v-0.74h6.17V42.95z"/>
		<path class="st2" d="M225.41,47.79h-4.56V42.2h4.43v0.76h-3.12v1.56h2.95v0.77h-2.95v1.73h3.25V47.79z"/>
		<path class="st2" d="M233.22,47.76h-1.38l-1.3-1.88c-0.18-0.25-0.34-0.42-0.48-0.48c-0.18-0.08-0.46-0.13-0.84-0.13h-0.47v2.48
			h-1.28v-5.55h2.35c1.76,0,2.64,0.5,2.64,1.5c0,0.33-0.16,0.61-0.49,0.83s-0.76,0.36-1.28,0.43c0.45,0.05,0.78,0.24,1,0.55
			L233.22,47.76z M228.76,44.51h0.61c0.53,0,0.94-0.06,1.25-0.18c0.37-0.13,0.55-0.34,0.55-0.62c0-0.33-0.16-0.54-0.47-0.64
			c-0.22-0.06-0.66-0.1-1.32-0.1h-0.62V44.51z"/>
	</g>
	<polygon class="st1" points="29.06,0 29.06,6.92 46.87,17.28 52.68,13.63 	"/>
	<polygon class="st1" points="0,17.28 0,43.31 5.71,40.47 5.71,20.34 	"/>
	<polygon class="st1" points="1.84,47.44 24.91,60.15 24.91,53.79 7.77,43.96 	"/>
	<polygon class="st0" points="24.91,9.89 24.91,50.41 19.13,46.79 19.13,21.25 15.13,23.83 15.13,34.41 9.06,31.31 9.06,20.47 	"/>
	<polygon class="st0" points="29.06,9.89 29.06,50.41 34.85,46.79 34.85,21.25 38.85,23.83 38.85,34.41 44.91,31.31 44.91,20.47
		"/>
	<polygon class="st2" points="19.13,46.79 19.13,50.47 24.91,53.79 24.91,50.41 	"/>
	<polygon class="st2" points="34.85,46.79 34.85,50.47 29.06,53.79 29.06,50.41 	"/>
	<polygon class="st1" points="52.14,47.44 29.06,60.15 29.06,53.79 46.2,43.96 	"/>
	<polygon class="st1" points="25.18,0 25.18,6.92 7.38,17.28 1.57,13.63 	"/>
</g>
</svg></a>
	<button class="navbar-toggler navbar-dark navbar-toggler-right navbar_js" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInRight">
	  <ul class="navbar-nav  ml-auto">
		<?php
		$sql = " select *
					from {$g5['menu_table']}
					where me_use = '1'
					  and length(me_code) = '2'
					order by me_order, me_id ";
		$result = sql_query($sql, false);
		$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
		$menu_datas = array();
		for ($i=0; $row=sql_fetch_array($result); $i++) {
			$menu_datas[$i] = $row;

			$sql2 = " select *
						from {$g5['menu_table']}
						where me_use = '1'
						  and length(me_code) = '4'
						  and substring(me_code, 1, 2) = '{$row['me_code']}'
						order by me_order, me_id ";
			$result2 = sql_query($sql2);
			for ($k=0; $row2=sql_fetch_array($result2); $k++) {
				$menu_datas[$i]['sub'][$k] = $row2;
			}
		}
		$i = 0;
		foreach( $menu_datas as $row ){
			if( empty($row) ) continue;
		?>
			<?php if($row['sub']['0']) { ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle en2 f16" href="<?php echo $row['me_link']; ?>" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
					<?php echo $row['me_name'] ?>
					</a>
						<!-- 서브 -->
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
							<?php
							// 하위 분류
							$k = 0;
							foreach( (array) $row['sub'] as $row2 ){

							if( empty($row2) ) continue;

							?>
							<a class="dropdown-item ko1 f15 fw4" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>

							<?php
							$k++;
							}   //end foreach $row2

							if($k > 0)
							echo '</ul>'.PHP_EOL;
							?>
			<?php }else{?>
				<li class="nav-item">
				<a class="nav-link en2 f16" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
				</li>
			<?php }?>
		</li>

		<?php
		$i++;
		}   //end foreach $row

		if ($i == 0) {  ?>
			<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
		<?php } ?>
		<li class="nav-item dropdown login">
		  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			LOGIN
		  </a>
		  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">

			<?php if($is_admin) { ?><a class="dropdown-item" href="<?php echo G5_URL?>/adm">관리자</a><?php } ?>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/new.php">새글</a>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/qalist.php">1:1문의</a>
			<?php if($is_member) { ?>
			<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/logout.php">로그아웃</a>
			<?php }else{ ?>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/login.php">로그인</a>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/register.php">회원가입</a>
			<?php } ?>
		  </div>
		</li>
	  </ul>
    <div class="bg"></div>
	</div>
  </div>
</nav>

<!-------------------------- /네비게이션 -------------------------->
<?php if(!defined('_INDEX_')) { ?>
<div class="container minh600 content">
<?php } ?>
