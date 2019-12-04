<div class="main">
	<?php
	$nx = 58;
	$ny = 114;
	$dust_area = "평택항";
	?>
	<div class="weather">
		<div class="area">
			<div class="inner">
				<span class="s-1"><?=date("Y.m.d")?> (<span class="view_week">--</span>)</span>
				<span class="s-2">평택의 오늘 <span class="t-1">▷</span> <span class="sky_view">--</span></span>
				<span class="s-3"><span class="big">로딩중..</span><span class="c">℃</span></span>
				<span class="s-4">
					<img src="http://img.sampobeach.co.kr/weather/finedust.png" alt="미세먼지" />
					<span class="txt-dust">미세먼지 - <span class="grade">--</span></span>
				</span>
			</div>
			<img class="sky_img" src="http://img.sampobeach.co.kr/weather/clear.png" alt="날씨" />
		</div>
	</div>
	<script>
		$.ajax({
			url: "/common/weather.php",
			type: "get",
			data: "nx=<?=$nx?>&ny=<?=$ny?>&dust_area=<?=$dust_area?>&api=Y",
			success: function(e) {
				e = e.split("||");
				$(".weather .view_week").html(e[0]);
				$(".weather .sky_view").html(e[1]);
				$(".weather .big").html(e[2]);
				$(".weather .sky_img").attr("src", "http://img.sampobeach.co.kr/weather/"+e[3]);
				$(".weather .grade").html(e[4]);
			}
		});
	</script>
	<!-- //.weather -->

	<div class="vid-wrap">
		<div class="vid-bg"></div>
		<section class="vid-area pc">
			<video preload="none" autoplay muted class="vid-pc video" id="video" onended="videoFn.end()" poster="http://img.ramadapt.co.kr/main/visual.jpg">
			<!-- <video autoplay muted class="vid-pc video" id="video" onended="videoFn.end()"> -->
				<source src="http://static.ramadapt.co.kr/files/media/pc.mp4" type="video/mp4" />
				IE 8 이하는 비디오가 나오지 않습니다. IE 버전을 업데이트 하시길 바랍니다.<br/>
				Please change to a modern browser
			</video>
		</section>
		<div class="vid-txt-box">
			<a href="javascript:;" class="vid-txt"><img src="http://img.ramadapt.co.kr/main/visual_logo.png" alt="강릉씨베이호텔 자세한 정보 보기" /></a>
		</div>
	</div>
	<!-- //.vid-wrap -->
</div>
        
<!-- 181218 무료조식 제공 안내 추가 -->
<div id="main_event">
	<div class="centerThis">
		<div class="evt-area clr">
			<figure class="evt-img"><img src="http://img.ramadapt.co.kr/main_evt_bf.jpg" alt="조식 이미지"></figure>
			<div class="evt-box">
                <?php if(date("Y-m-d") < "2019-08-13") { ?>
				<p style="font-size: 20px; line-height: 20px; color:yellow; font-weight:bold; ">2019-08-01 ~ 2019-08-12 해당기간 동안 조식 및 레스토랑 이용불가</p><br>
				<?php } ?>
				<p class="evt-tit">[이벤트] 주중 투숙객 무료조식 제공 및 주말 유료조식 할인!</p>
				<ul class="evt-list">
					<?php	if(date("Yn") == "20193") {	?>
					<li>
						<p><b>▶<?=date("n")?>월 투숙객 유료조식 할인◀</b></p>
					</li>
					<?php	}	?>
					<li>
						<p class="evt-list-tit">1. 주중 무료조식 (월~금요일/평일기준)</p>
						<dl class="evt-list-box">
							<dt>메뉴</dt>
							<dd>빵3종, 주스2종, 우유, 잼3종, 씨리얼3종, 소세지볶음, 스프, 밥, 국, 김치</dd>
						</dl>
					</li>
					<li>
						<p class="evt-list-tit">2. 주말 유료조식 (토/일, 공휴일)</p>
						<dl class="evt-list-box">
							<dt>메뉴</dt>
							<dd>아메리칸조식뷔페 풀패키지</dd>
						</dl>
						<dl class="evt-list-box">
							<dt>이용요금</dt>
							<dd>대인(8세 이상) 15,000원 → (할인가) <?=breakfast_adult?>원<br>소인(7세 이하~36개월 이상) 12,000원 → (할인가) <?=breakfast_kids?>원</dd>
						</dl>
					</li>
				</ul>
                <p class="evt-txt">※ 조식뷔페는 주중(월~금)은 무료, 주말(토/일,공휴일)은 유료로 운영합니다.</p>
			</div>
		</div>
	</div>
</div>
<!--//#main_event-->

<div id="main_notice" class="type-2">
	<div class="centerThis group type-2">
		<div class="cli01">
			<ul class="cont_group">
				<li class="cont_title">디럭스 더블</li>
				<li class="cont_img">
					<img src="<?=base_img?>/cont_img_01.gif" />
				</li>
				<li class="cont_detail">
					<a href="/gallery/?page=1">룸정보 자세히 보기</a>
				</li>
				<li class="cont_reservation">
					<a href="/reservation/">예약하기</a>
				</li>
			</ul>
		</div>
		<div class="cli02">
			<ul class="cont_group">
				<li class="cont_title">디럭스 트윈</li>
				<li class="cont_img">
					<img src="<?=base_img?>/cont_img_02.gif" />
				</li>
				<li class="cont_detail">
					<a href="/gallery/?page=2">룸정보 자세히 보기</a>
				</li>
				<li class="cont_reservation">
					<a href="/reservation/">예약하기</a>
				</li>
			</ul>
		</div>
		<div class="cli03">
			<ul class="cont_group">
				<li class="cont_title">디럭스 수퍼더블</li>
				<li class="cont_img">
					<img src="<?=base_img?>/gall_s1_01_01.jpg" />
				</li>
				<li class="cont_detail">
					<a href="/gallery/?page=5">룸정보 자세히보기</a>
				</li>
				<li class="cont_reservation">
					<a href="/reservation/">예약하기</a>
				</li>
			</ul>
		</div>
		<div class="cli04">
			<ul class="cont_group">
				<li class="cont_title">트리플 룸</li>
				<li class="cont_img">
					<img src="<?=base_img?>/cont_img_03.gif" />
				</li>
				<li class="cont_detail">
					<a href="/gallery/?page=3">룸정보 자세히보기</a>
				</li>
				<li class="cont_reservation">
					<a href="/reservation/">예약하기</a>
				</li>
			</ul>
		</div>
		<div class="cli05">
			<ul class="cont_group">
				<li class="cont_title">스위트</li>
				<li class="cont_img">
					<img src="<?=base_img?>/cont_img_04.gif" />
				</li>
				<li class="cont_detail">
					<a href="/gallery/?page=4">룸정보 자세히보기</a>
				</li>
				<li class="cont_reservation">
					<a href="/reservation/">예약하기</a>
				</li>
			</ul>


			<!-- <ul class="cont_bbs">
				<?php //181107 이사님요청으로 공지사항 비노출?>
				<li class="cont_title">공지사항</li>
			</ul>
			
			<ol class="cont_board">
				<?php
					$qry = "select * from go.brand_board where 1=1 and p_no = '".p_no."' and btype = 'notice' and state = 'Y' order by num desc limit 0,5";
					$res = $go_slave->query($qry);
					while($rw = $go_slave->fetch($res)) {
				?>
				<li>
					ㆍ<a href="/board/?dd=<?=$go_util->XOREncode("read")?>&num=<?=$rw["num"]?>" style="cursor: pointer;"><?=$rw["subject"]?></a><span class="date"></span>
				</li>
				<?php
					}
				?>
			</ol> -->
		</div>
	</div>
	<div class="centerThis">
		<div class="group suttle_usa">
			<div class="split split-1">
				<p class="p-1">
					<span class="s-1">무료 셔틀버스 상시운행 노선</span>
					<span class="s-2">(호텔 ↔ 미군 캠프험프리스 "Camp Humphreys" / 30분 소요, 21km)</span>
				</p>
				<p class="p-2">
					<span class="s-row"><span class="dot">●</span> 호텔 (아침 07:30 출발) → 캠프험프리스 (아침 08:05 도착)</span>
					<span class="s-row"><span class="dot">●</span> 캠프험프리스 (오후 17:30 출발) → 호텔 (오후 18:05 도착)</span>
					<span class="s-row"><span class="dot">※</span> 본 셔틀버스는 이용 전 반드시 프론트에 문의하여 주십시오.</span>
				</p>
			</div>
			<div class="split split-2">
				<ul class="cont_bbs">
					<li class="cont_title">포승상단 무료 통근버스</li>
					<li class="cont_txt">
						<p><a href="http://img.ramadapt.co.kr/location/suttle_short.jpg" target="_blank"><span>▶</span> 근거리 버스 안내</a></p>
						<p><a href="http://img.ramadapt.co.kr/location/suttle_long.jpg" target="_blank"><span>▶</span> 원거리 버스 안내</a></p>
					</li>
				</ul>
			</div>
		</div>
		<!-- //.suttle_usa -->
	</div>
	<!-- //.centerThis -->
</div>
<!--//#main_notice-->