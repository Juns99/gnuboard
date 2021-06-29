<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<div class="ety-mt-main"></div>

<!--슬라이드 -->


<?php echo latest('theme/pic_basic_owl','event', 4, 100);?>

<div class="margin-top-80"></div>
<!-- 탑케어동물병원 -->
<div class="container">
	<div class="center-heading">
		<h2><strong>TOPCARE</strong></h2>
    <p>탑케어동물병원</p>
		<span class="center-line"></span>
		<p class="sub-text margin-bottom-80 ko1 f15">
		350평의 경기북부 최대규모를 자랑하는 탑케어동물의료원은 생명존중의 정신으로 최상의 진료, 연구, 교육에 앞장섭니다.<br>
    대학병원급 최신식 의료장비, 20여년 경력의 대표원장 두 분과 대학병원 과장, 팀장 출신의 최고의 의료진, 쾌적한 공간으로 보호자도, 반려동물도 안심하고 내원하실 수 있는 의료원입니다.
		</p>
	</div>
	<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
					<div class="info">
            <img src="/gnu/theme/ety_theme_company_v1.2/img/con1.jpg" alt="의료진">
						<h3 class="title">의료진</h3>
						<p class="ko1 f15">
							20년 경력의 대표원장 두 분과 각 분야의 전공 수의사가 진료합니다. 심리적 아픔까지 치료하겠습니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm" onclick="location.href='http://ety.kr/board/qa'">더보기 +</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
          <div class="info">
            <img src="/gnu/theme/ety_theme_company_v1.2/img/con2.jpg" alt="진료분야">
						<h3 class="title">진료분야</h3>
						<p class="ko1 f15">
							강아지, 고양이는 물론 특수동물까지 작은 생명도 소중한 마음으로 보살핍니다. 모든 반려동물이 건강하길 바랍니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm" onclick="location.href='http://ety.kr/board/qa'">더보기 +</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
          <div class="info">
            <img src="/gnu/theme/ety_theme_company_v1.2/img/con3.jpg" alt="영상센터">
						<h3 class="title">영상센터</h3>
						<p class="ko1 f15">
							차별화된 64ch CT, 1.5T MRI, 최고급 심장초음파 보유로 품격있는 진료가 가능합니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm" onclick="location.href='http://ety.kr/board/qa'">더보기 +</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>
    <div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
          <div class="info">
            <img src="/gnu/theme/ety_theme_company_v1.2/img/con4.jpg" alt="특화클리닉">
						<h3 class="title">특화클리닉</h3>
						<p class="ko1 f15">
							복강경, 혈액투석, 수중재활,<br>아로마테라피, 레이져테라피, 전문 안과센터,<br>정형수술 등 특화된 진료를 약속합니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm" onclick="location.href='http://ety.kr/board/qa'">더보기 +</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>
	</div><!-- /row -->
	<!-- LATEST : basic_company -->
	<?php echo latest('theme/basic_company', 'free', 3, 13); ?>
</div><!-- /container -->

<!-------------------------- Special CARE -------------------------->
<div class="py-5 margin-top-80" style="background:#f2f2f2;">
	<div class="container">
		<div class="center-heading margin-top-40">
			<h2>Special<strong> CARE</strong> </h2>
			<span class="center-line"></span>
		</div>

	  <!-- animal Type -->
	  <div class="row margin-top-50 margin-bottom-50">

		<div class="col-lg-5 text-right pad_top">
		  <h2>DOG CARE</h2>
		  <p class="ko_17">강아지진료</p>
		  <p class="ko_19 tit">특화된 강아지 진료</p>
      <span class="center-line"></span>
		  <p class="ko_16">
		  내과, 외과, 응급의학과, 영상의학과, 안과, 치과, 수술, 심신장, 재활센터 분리로 세분화된 진료를 약속합니다. 대형견 진료실을 구분지어 소형견, 중형견, 대형견이 스트레스 받지 않는 진료가 가능합니다.
      </p>
      <div class="margin-top-20 margin-bottom-20 box_fs">
        <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='http://mjs99075.cafe24.com/gnu/bbs/content.php?co_id=Dog_Care'">자세히 보기 ></button>
      </div>
		</div>
		<div class="col-lg-7">
			<img class="img-fluid rounded" src="/gnu/theme/ety_theme_company_v1.2/img/dog1.jpg" alt="">
		</div>
	  </div>

    <div class="row margin-top-50 margin-bottom-50">
    <div class="col-lg-7">
			<img class="img-fluid rounded" src="/gnu/theme/ety_theme_company_v1.2/img/cat1.jpg" alt="">
		</div>

		<div class="col-lg-5 pad_top">
		  <h2>CAT CARE</h2>
		  <p class="ko_17">고양이진료</p>
		  <p class="ko_19 tit">고양이 친화진료</p>
      <span class="center-line"></span>
		  <p class="ko_16">
		  국제고양이회(ISPM)에서 Gold등급을 인증받은 탑케어동물의료원은 고양이 대기실, 고양이 진료실을 분리해 고양이가 스트레스 받지 않고 케어를 받을 수 있도록 최선을 다하고 있습니다.
      </p>
      <div class="margin-top-20 margin-bottom-20 box_fs">
        <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='http://ety.kr/board/qa'">자세히 보기 ></button>
      </div>
		</div>
	  </div>

    <div class="row margin-top-50 margin-bottom-50">
		<div class="col-lg-5 text-right pad_top">
		  <h2>Special Animal CARE</h2>
		  <p class="ko_17">특수동물진료</p>
		  <p class="ko_19 tit">특수동물 진료</p>
      <span class="center-line"></span>
		  <p class="ko_16">
      토끼, 기니피그, 고슴도치, 햄스터, 거북이, 페럿 등 각 종에 맞는 섬세한 진료 및 꾸준한 연구로 특수동물 특화 진료가 가능합니다.
		  </p>
      <div class="margin-top-20 margin-bottom-20 box_fs">
        <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='http://ety.kr/board/qa'">자세히 보기 ></button>
      </div>
		</div>
		<div class="col-lg-7">
			<img class="img-fluid rounded" src="/gnu/theme/ety_theme_company_v1.2/img/special1.jpg" alt="">
		</div>
	  </div><!-- /.row -->
	</div>
</div>

<!-------------------------- parallax 박스 및 countdown -------------------------->
<div class="parallax-window" data-parallax="scroll">
	<div class="container">
    <div class="row medical">
      <div class="col-xs-12 col-sm-12 col-lg-6 head_area">
        <h2 class="text_col"><strong>24시 365일 연중무휴</strong> 진료로,<br>
            언제나 응급/비응급 진료를 이용하실 수 있습니다.</h2>
        </div>
      <div class="col-xs-12 col-sm-4 col-lg-2">
        <div class="box">
          <div class="icon">
            <div class="info bor">
              <h3 class="title week">주간진료</h3>
              <p class="ko1 f15 text_col">
                A.M 9시<br>~<br>P.M 8시
              </p>
              <div class="margin-top-20 margin-bottom-20">
                <button type="button" class="btn btn-secondary btn-sm bt_ft" onclick="location.href='http://ety.kr/board/qa'">예약하기</button>
              </div>
            </div>
          </div>
          <div class="space"></div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-lg-2">
        <div class="box">
          <div class="icon">
            <div class="info bor">
              <h3 class="title night">야간진료</h3>
              <p class="ko1 f15 text_col">
                P.M 8시<br>~<br>P.M 10시
              </p>
              <div class="margin-top-20 margin-bottom-20">
                <button type="button" class="btn btn-secondary btn-sm bt_ft" onclick="location.href='http://ety.kr/board/qa'">예약하기</button>
              </div>
            </div>
          </div>
          <div class="space"></div>
        </div>
        <div class="col_line"></div>
      </div>
      <div class="col-xs-12 col-sm-4 col-lg-2">
        <div class="box">
          <div class="icon">
            <div class="info bor">
              <h3 class="title emergency">응급진료</h3>
              <p class="ko1 f15 text_col">
                P.M 10시<br>~<br>A.M 9시
              </p>
              <div class="margin-top-20 margin-bottom-20">
                <button type="button" class="btn btn-secondary btn-sm bt_ft" onclick="location.href='http://ety.kr/board/qa'">1666-7501</button>
              </div>
            </div>
          </div>
          <div class="space"></div>
        </div>
      </div>
    </div>
	</div>
</div><!-- /parallax -->

<section id="contact">
  <div class="row" style="margin:unset">
      <div class="col-lg-12 text-center">
          <h2>진료 신청</h2>
      </div>
  </div>
  <div class="pc_db_form">
				<form name="sentMessage" method="post" action="http://mjs99075.cafe24.com/gnu/" class="landing_form" novalidate="">
					<input name="has_data" type="hidden" value="1">
					<input name="page" type="hidden" value="Pc">
					<input name="type" type="hidden" value="HOMESERVICE">
					<ul class="db_list">
						<li class="mb5">
							<div>
								<span><label>동물종</label></span>
								<span>
									<div class="selectbox">
									<select class="input-control address-select form-control form" data-message="지역선택 항목은 필수입력 항목입니다.">
										<option value="">동물 종 선택</option>
										<option value="dog">강아지</option>
										<option value="cat">고양이</option>
										<option value="special">특수동물</option>
									</select>
									</div>
								</span>
							</div>
              <div>
								<span><label>동물 성별</label></span>
								<span>
									<div class="selectbox">
									<select class="input-control address-select form-control form" data-message="지역선택 항목은 필수입력 항목입니다.">
										<option value="">동물 성별 선택</option>
										<option value="male">수컷</option>
										<option value="female">암컷</option>
										<option value="neutralization">중성화</option>
									</select>
									</div>
								</span>
							</div>
						</li>
						<li class="mb5">
							<div>
								<span><label>이름</label></span>
								<span><input type="text" name="representative" class="input-control form" data-message="이름을 입력해주세요"></span>
							</div>
						</li>
						<li class="mb5">
							<div>
								<span><label>이메일</label></span>
								<span><input type="email" name="email" class="input-control form" data-message="이메일을 입력해주세요"></span>
							</div>
						</li>
						<li class="mb5">
							<div>
								<span><label>연락처</label></span>
								<span>
									<input type="text" name="phone[]" class="phone_check input-control form" data-message="연락처를 입력해주세요">
								</span>
							</div>
						</li>
						<li class="mb5">
							<div>
								<span><label>내용</label></span>
								<span>
									<textarea type="text" name="contents" class="input-control"></textarea>

									<div class="db_agree_box">

										<label class="checkbox">
                        <input type="checkbox" class="agree form-control form" data-message="선택사항을 확인해주세요">
                        <span class="icon"></span>
                        <span class="text_1">
                            위의 기입한 내용은 모두 사실이며, 거짓된 정보 하나 없음을 밝힙니다.<br>

                        </span>
                    </label>
										<label class="checkbox">
											<input type="checkbox" id="agree" class="agree form-control form" data-message="개인정보취급방침에 동의 해주세요">
											<span class="icon"></span>
											<span class="text_1">개인정보 취급방침 이용약관</span>
										</label>
										<br>
										<div class="privacy_con_box">
											<div>
												<h3><strong>개인정보처리방침</strong></h3>
                              <br>
                              ■ 목적<br>
                              탑케어동물의료원('이하 '회사')은 개인정보보호법에 따라 이용자의 개인정보 보호 및 권익을 위해 처리방침을 두고 하는 것을 목적으로 한다.<br>
                              <br>
                              ■ 적용범위<br>
                              회사는 개인정보 처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지하는 것에 적용된다.<br>
                              1. 수집하는 개인정보 항목 및 수집방법<br>
                              2. 개인정보의 처리 목적<br>
                              3. 개인정보의 처리 및 보유기간<br>
                              4. 개인정보처리 위탁<br>
                              5. 정보주체와 법정대리인의 권리•의무 및 그 행사방법에 관한 사항<br>
                              6. 개인정보 자동수직 장치의 설치, 운영 및 그 거부에 관한 사항<br>
                              7. 개인정보의 파기<br>
                              8. 개인정보의 안전성 확보 조치<br>
                              9. 개인정보 보호책임자<br>
                              10. 개인정보 처리방침 변경<br>
                              <br>
                              1. 수집하는 개인정보 항목 및 수집방법<br>
                              본 사이트는 별도의 회원가입 절차 없이 컨텐츠에 자유롭게 접근할 수 있습니다. 다만, 회원에게만 제공되는 컨텐츠를 접근하는 경우에 한하여 회원가입을 통해 신청자에 관한 개인정보를 일부 수집하고 있습니다. 회사가 수집하는 개인정보는 다음과 같습니다.<br><br>
                              (1) 수집항목<br>
                              ① 홈페이지 회원가입 및 관리<br>
                              - 필수항목 : 아이디, 비밀번호, 이름, 이메일, 전화번호<br>
                              - 선택항목 : 핸드폰번호, 주소, 생년월일, 성별, 직업<br>
                              ② A/S신청 및 고객의견 접수<br>
                              - 필수항목 : 이름, 전화번호, 주소, 핸드폰번호, 이메일<br>
                              ③ 인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수있습니다.<br>
                              - IP주소, 쿠키, MAC주소, 서비스 이용기록, 방문기록, 불량 이용기록 등<br>
                              (2) 수집방법<br>
                              회사는 다음과 같은 방법으로 개인정보를 수집합니다.<br>
                              - 홈페이지(회원가입), 회원정보수정, A/S신청, 고객의견접수, 전화, 이용문의<br>
                              <br>
                              2. 개인정보의 처리 목적<br>
                              회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br>
                              (1) 홈페이지 회원가입 및 관리<br>
                              회원 가입의사 확인, 회원제 서비스 제공에 따른 본인 식별•인증, 회원자격 유지•관리 시행에 따른 본인확인, 서비스 부정이용 방지 등을 목적으로 개인정보를 처리합니다.<br>
                              (2) 민원사무 처리<br>
                              사실조사를 위한 연락•통지, 처리결과 통보 등을 목적으로 개인정보를 처리합니다.<br>
                              (3) 재화 또는 서비스 제공<br>
                              물품배송, 서비스 제공, 맞춤 서비스 제공, 요금결제•정산, 채권추심 등을 목적으로 개인정보를 처리합니다.<br>
                              <br>
                              3. 개인정보의 처리 및 보유 기간<br>
                              원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다. <br>
                              &lt;내부 방침에 의한 정보보유 사유&gt;<br>
                              ● 회원 ID<br>
                              - 보존 이유 : 서비스 이용의 혼선방지<br>
                              - 지침 : 개인정보의 삭제를 원하는 경우 지체 없이 해당 정보를 삭제합니다.<br>
                              &lt;관련법령에 의한 정보보유 사유&gt; <br>
                              상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.<br>
                              ● 계약 또는 청약철회 등에 관한 기록<br>
                              - 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률<br>
                              - 보존 기간 : 5년<br>
                              ● 대금결제 및 재화 등의 공급에 관한 기록<br>
                              - 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률<br>
                              - 보존 기간 : 5년<br>
                              ● 소비자의 불만 또는 분쟁처리에 관한 기록<br>
                              - 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률<br>
                              - 보존 기간 : 3년<br>
                              ● 본인확인에 관한 기록<br>
                              - 보존 이유 : 정보통신 이용촉진 및 정보보호 등에 관한 법률<br>
                              - 보존 기간 : 6개월<br>
                              ● 방문에 관한 기록<br>
                              - 보존 이유 : 통신비밀보호법<br>
                              - 보존 기간 : 3개월<br>
                              <br>
                              4. 개인정보처리 위탁<br>
                              (1) 회사는 원활한 업무처리를 위하여 다음과 같이 개인정보 처리업무를 위탁하고 있습니다.<br>
                              ● A/S 센터 운영<br>
                              - 위탁받는 자 (수탁자) : 수탁자<br>
                              - 위탁하는 업무의 내용 : 고객을 대상으로 제품 A/S제공 등<br>
                              (2) 회사는 위탁계약 체결시 개인정보 보호법 제25조에 따라 위탁업무 수행목적 외 개인정보 처리금지, 기술적ㆍ관리적 보호조치, 재위탁 제한, 수탁자에 대한 관리ㆍ감독, 손해배상 등 책임에 관한 사항을 계약서 등 문서에 명시하고, 수탁자가 개인정보를 안전하게 처리하는지를 감독하고 있습니다.<br>
                              (3) 위탁업무의 내용이나 수탁자가 변경될 경우에는 지체없이 본 개인정보 처리방침을 통하여 공개하도록 하겠습니다<br>
                              <br>
                              5. 정보주체와 법정대리인의 권리• 의무 및 그 행사방법에 관한 사항<br>
                              (1) 정보주체와 법정대리인의 권리• 의무 및 그 행사방법에 관한 사항<br>
                              ①	개인정보 열람요구<br>
                              ② 오류 등이 있을 경우 정정 요구<br>
                              ③ 삭제요구<br>
                              ④ 처리정지 요구<br>
                              (2)	제1항에 따른 권리행사는 회사에 대해 개인정보보호법 시행령 제41조제1항 에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며, 회사는 이에 대해 지체없이 조치하겠습니다.<br>
                              (3)	제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보보호법 시행규칙 제 11호 서식에 따른 위임장을 제출하셔야 합니다.<br>
                              (4)	개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항,제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.<br>
                              (5)	개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다. 회사는 다음에 해당하는 경우에는 개인정보의 전부 또는 일부에 대하여 열람/ 정정•삭제를 거절할 수 있습니다.<br>
                              - 법률에 따라 열람이 금지되거나 제한되는 경우<br>
                              - 다른 사람의 생명,신체를 해할 우려가 있거나 다른 사람의 재산과 그 밖의 이익을 부당하게 침해할 우려가 있는 경우<br>
                              (6)	회사는 정보주체 권리에 따른 열람의 요구, 정정•삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.<br>
                              <br>
                              6. 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항<br>
                              (1)	쿠키 등 사용 목적<br>
                              회사는 이용자에게 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠키(cookie)’ 등을 사용합니다. 쿠키란 회사의 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 컴퓨터내의 하드 디스크에 저장되기도 합니다. 이후 이용자가 웹사이트에 방문할 경우 웹사이트 서버는 이용자의 하드 디스크에 저장되어 있는 쿠키의 내용을 읽어 이용자의 환경설정을 유지하고 맞춤화된 서비스를 제공하기 위해 이용됩니다.<br>
                              (2)	쿠키 설정 거부 방법<br>
                              이용자는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다. 단, 이용자께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다<br>
                              - 쿠키설정 방법(인터넷 익스플로8.0을 사용하고 있는 경우): 「도구」 메뉴에서 「인터넷옵션」을 선택합니다. 「개인정보 탭」을 클릭합니다. 「설정」을 이용하여 본인에게 맞는 쿠키허용 수준을 설정 하시면 됩니다.<br>
                              - 받은 쿠키를 보는 방법(인터넷 익스플로8.0을 사용하고 있는 경우): 도구」메뉴에서 「인터넷옵션」을 선택합니다. 「일반」탭을 클릭하여 ‘검색기록’의 「설정」으로 들어가서, 「파일보기」를 통해 확인합니다.<br>
                              - 쿠키설정 거부방법(인터넷 익스플로8.0을 사용하고 있는 경우): 도구」메뉴에서 「인터넷옵션」을 선택합니다. 「개인정보 탭」을 클릭 합니다.「설정」을 이용하여 상위레벨로 하여 “모든 쿠키차단” 으로 설정 하시면 됩니다.<br>
                              <br>
                              7. 개인정보의 파기<br>
                              회사는 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.<br>
                              (1) 파기절차<br>
                              이용자가 입력한 정보는 목적 달성 후 별도의 DB에 옮겨져(종이의 경우 별도의 서류) 내부 방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시 파기됩니다. 이 때, DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.<br>
                              (2) 파기기한<br>
                              이용자의 개인정보는 개인정보의 보유기간이 경과된 경우에는 보유기간의 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.<br>
                              (3) 파기방법<br>
                              전자적 파일 형태의 정보는 기록을 재생할 수 없는 기술적 방법을 사용합니다. 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.<br>
                              <br>
                              8. 개인정보의 안전성 확보 조치<br>
                              회사는 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적/관리적 및 물리적 조치를 하고 있습니다.<br>
                              (1) 개인정보 취급 직원의 최소화 및 교육<br>
                              개인정보를 취급하는 직원을 지정하고 담당자에 한정시켜 최소화 하여 개인정보를 관리하는 대책을 시행하고 있습니다.<br>
                              (2) 내부관리계획의 수립 및 시행<br>
                              개인정보의 안전한 처리를 위하여 내부관리계획을 수립하고 시행하고 있습니다.<br>
                              (3) 비밀번호의 암호화<br>
                              이용자의 비밀번호는 암호화 되어 저장 및 관리되고 있습니다.<br>
                              (4) 개인정보에 대한 접근 제한<br>
                              개인정보를 처리하는 데이터베이스시스템에 대한 접근권한의 부여,변경,말소를 통하여 개인정보에 대한 접근통제를 위하여 필요한 조치를 하고 있습니다.<br>
                              (5) 해킹 등에 대비한 대책<br>
                              회사는 해킹이나 컴퓨터 바이러스 등에 의해 회원의 개인정보가 유출되거나 훼손되는 것을 막기 위해 최선을 다하고 있습니다. 개인정보의 훼손에 대비해서 자료를 수시로 백업하고 있고, 최신 백신프로그램을 이용하여 이용자들의 개인정보나 자료가 누출되거나 손상되지 않도록 방지하고 있습니다. 그리고 방화벽을 이용하여 외부로부터의 무단 접근을 통제하고 있으며, 기타 시스템적으로 보안성을 확보하기 위한 가능한 모든 기술적 장치를 갖추려 노력하고 있습니다.<br>
                              <br>
                              9. 개인정보 보호책임자<br>
                              회사는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.<br>
                              ● 개인정보 보호책임자<br>
                              이메일 : privacy@bodyfriend.co.kr<br><br>
                              ● 개인정보 보호담당자<br>
                              정보주체는 회사의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 회사는 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다. 기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.<br>
                              ● 개인정보침해신고센터 ( http://www.118.or.kr / 118 )<br>
                              ● 정보보호마크인증위원회 ( http://www.eprivacy.or.kr / 02-580-0533~4 )<br>
                              ● 대검찰청 첨단범죄수사과 ( http://www.spo.go.kr / 02-3480-2000 )<br>
                              ● 경찰청 사이버테러대응센터 ( http://www.ctrc.go.kr / 02-392-0330 )<br>
                              <br>
                              10. 개인정보 처리방침 변경<br>
                              개인정보처리방침은 시행일로부터 적용되며, 법령 및 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항의 시행 7일 전부터 공지사항을 통하여 고지할 것입니다.<br>
                              ● 시행일자 : 2018년 11월 22일
                        <p></p>
  						  		  </div>
										</div>
									</div>
								</span>
							</div>
						</li>
					</ul>
					<div class="submitbox">
						<button type="submit" class="hoverbtn">신청하기</button>
					</div>
				</form>
			</div>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
