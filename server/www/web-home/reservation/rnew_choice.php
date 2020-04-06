<?php

include_once INC_DIR."/www/web-home/common/checkin_layer_box.php";
//날짜세팅


if(!empty($_GET["sub_sdate"])) {
	$save_sdate = $_GET["sub_sdate"];
	//$save_edate = $_GET["sub_edate"];
	$sdate_ex = explode("-", $save_sdate);
	$sdate_tx = @mktime(0,0,0,$sdate_ex[1],$sdate_ex[2]+1,$sdate_ex[0]);
	$save_edate = date("Y-m-d", $sdate_tx);
} else {
	$save_sdate = date("Y-m-d");	
	$save_edate = date("Y-m-d", strtotime("+1 day"));	
}

//자체 마감일경우 조건추가 20160818
$j_close = $go_slave->queryrows("select * from n_start_chk where state='N' and sdate_dt='".date("Y-m-d")."'");
//$j_close = 1;	//테스트용

if((str_replace("-","",$save_sdate) > date("Ymd")) && !empty($save_sdate)) {
	$sdate_ex = explode("-", $save_sdate);
	if(empty($save_edate) || $save_sdate == $save_edate) {
		$sdate_tx = @mktime(0,0,0,$sdate_ex[1],$sdate_ex[2]+1,$sdate_ex[0]);
		$save_edate = date("Y-m-d", $sdate_tx);
	}

	$sdate = $save_sdate;
	$edate = $save_edate;

} else {
	$yoil = date("w");
	switch($yoil) {
		case "0":
		case "6":
			$end_time = "1630";
			break;

		default:
			$end_time = "1800";
			break;
	}
	
	$sdate = date("Y-m-d");
	$edate = date("Y-m-d", strtotime("+1 day"));
}

$mindate = "0";
$mindate_e = "1";


switch($pinfo["site"]) {
	case "hottel":
	case "pinspot":
		$basic_night = 1;
		break;
	
	case "woori":
	case "gpension":
		$basic_night = 6;
		break;
	
	default:
		$basic_night = 15;
		break;
}

$sdate_ex = explode("-", $sdate);
$edate_ex = explode("-", $edate);


$bts = @mktime(0,0,0,$sdate_ex[1],$sdate_ex[2],$sdate_ex[0]);
$ebts = @mktime(0,0,0,$edate_ex[1],$edate_ex[2],$edate_ex[0]);

$night = ($ebts - $bts) / 86400;
if($night > $basic_night) {
	$edate = @date("Y-m-d", mktime(0,0,0,$bts2[1],$bts2[2]+1,$bts2[0]));
}

$sdate_ex = explode("-", $sdate);
$edate_ex = explode("-", $edate);

//$sdate = $sdate_ex[0]."년 ".$sdate_ex[1]."월 ".$sdate_ex[2]."일";
//$edate = $edate_ex[0]."년 ".$edate_ex[1]."월 ".$edate_ex[2]."일";

if(!empty($_COOKIE["prev_adult"])) {
	$prev_person = $_COOKIE["prev_adult"];
}

$loading_txt = ($hinfo["chk_pack"] == "Y") ? "실시간 요금 및 패키지상품" : "실시간 요금 및 객실";
$total_company = (merge == "Y") ? total_comp : SITE_NAME_K;

//선택가능한 최대인원세팅
if($exp != "on") {
	$max_num = $go_db->queryfetch("select max(rmax_num) as max_num, max(rmin_num) as min_num from n_product_room where p_no='".$p_no."' and chk_view = 'Y'");
	$max_choice = ($hinfo["site"] == "ddnayo") ?  $max_num["min_num"] :  $max_num["max_num"];
	if(empty($max_choice)) {
		$max_choice = 20;
	}
} else {
	$max_choice = 20;
}

$prev_night = (!empty($night)) ? $night : 1; 
$prev_roomcnt = (!empty($_COOKIE["room_cnt"])) ? $_COOKIE["room_cnt"] : 1; 
?>
<input type="hidden" id="loading_txt" value="<?=$loading_txt?>" />
<div id="rsv_wrapper" class="rsv_wrapper">
	<?php 
	$basic_cont = (!empty($img_qry["sinfo_text2"])) ? $img_qry["sinfo_text2"] : ""; 
	
	if(!empty($basic_cont)) {
		if(char == "") {
	?>
	<!--- 상세 공지사항 ---->
	<div id="detail_noticeBox2" style="display: none">
		<div class="box">
			<!--<h3><img src="<?=goco_img?>/icon_notice.png?ver=<?=date("YmdHis")?>" /> <?=$total_company?>에서 알려드립니다!</h3>
			<p class="p-1"><?=nl2br($basic_cont)?></p>-->
<?php /*
			<!-- 181218 무료조식 제공 안내 추가 -->
			<h3 class="evt-list-tit"><img src="<?=goco_img?>/icon_notice.png?ver=20181218150235"> 주중 투숙객 무료조식 제공 (주말/공휴일 제외)</h3>
			<ul class="evt-list">
				<?php	if(date("Yn") == "20193") {	?>
				<li>
					<p><b>▶<?=date("n")?>월 투숙객 유료조식 할인◀</b></p>
				</li>
				<?php	}	?>
				<li>
					<p class="evt-list-tit">1. 주중 무료조식 (주말/공휴일 제외)</p>
					<dl class="evt-list-box">
						<dt>메뉴</dt>
						<dd>빵3종, 주스2종, 우유, 잼3종, 씨리얼3종, 소세지볶음, 스프, 밥, 국, 김치<br>(주중에는 유료조식 이용이 불가합니다.)</dd>
					</dl>
				</li>
				<li>
					<p class="evt-list-tit">2. 주말 유료조식(주말/공휴일/공휴일 전일)</p>
					<dl class="evt-list-box">
						<dt>메뉴</dt>
						<dd>아메리칸조식뷔페(ABF) 풀패키지 (주말에는 무료조식 이용 불가합니다.)</dd>
					</dl>
					<dl class="evt-list-box">
						<dt>이용요금</dt>
						<dd>
							대인(8세 이상) 15,000원 → (할인가) <?=breakfast_adult?>원<br>소인(7세 이하~36개월 이상) 12,000원 → (할인가) <?=breakfast_kids?>원
						</dd>
					</dl>
				</li>
			</ul>
			<!--//END : 181218 무료조식 제공 안내 추가 -->
			*/ ?>
		</div>
	</div>
	<?php }	}	 ?>
	
	<input type="hidden" name="change_val" id="change_val" />

	<div class="clr"></div>
	<form name="rsch_form" id="rsch_form" method="post">
	<input type="hidden" name="find_pno" value="<?=$go_util->XOREncode($p_no)?>" />
	<input type="hidden" name="jehu_channel" value="<?=$hinfo["site"]?>" />
	<input type="hidden" name="prev_sang" value="<?=$prev_sang?>" />
	<?php if($hinfo["site"] != "expedia_a") { ?>
	<input type="hidden" name="prev_night" value="<?=$prev_night?>" id="prev_night"/>
	<?php } ?>
	<input type="hidden" name="prev_roomcnt" value="<?=$prev_roomcnt?>" id="prev_roomcnt"/>
	<input type="hidden" name="abr_val" value="<?=$abr_val?>" />
	<input type="hidden" name="choice_sdate" value="<?=$sdate?>" id="choice_sdate"/>
	<input type="hidden" name="choice_edate" value="<?=$sdate?>" id="choice_edate"/>
	<input type="hidden" name="choice_person" id="choice_person" />

	<input type="hidden" name="sub_sdate" value="<?=$sdate?>" id="sub_sdate"/>
	<input type="hidden" name="sub_edate" value="<?=$sdate?>" id="sub_edate"/>
	<input type="hidden" name="cal_mode" id="cal_mode" />
	<input type="hidden" name="single_up" id="single_up" value="<?=$single_up?>"/>

	<input type="hidden" name="pack_gubun" value="" />


	<!-- 패키지 딜 추가 input -->
	<input type="hidden" name="rp_no" id="rp_no" />

	</form>

	<?php
		$package_include = "1";
		include "/home/ebiztour/ramadapt.co.kr/www/web-home/reservation/package_gubun.php";
		$package_include = "";
	?>

	<div style="margin-bottom: 30px;    padding: 15px;    background: #c5c5c5;    border-radius: 10px;">
		<p style="width:96%; padding:2%; background:white; border-radius:10px; text-align:center; font-size:20px;">
			예약문의는 프론트 <b>031-229-3601</b> 으로 부탁드립니다.
		</p>
	</div>

	<!---- 객실리스트 나오는 공간 ------>
	<?php
		// 2020.04.02 박상현 : 이사님 지시로 비노출
	?>
	<!-- <div id="room_result">
		<div id="loading_div" style="text-align:center;width:100%;">
			<p style="font-size:15px; line-height:3; color:#807f7f"><span style="color:#ff610a"><?=$loading_txt?></span>을 불러오는 중입니다...</p>
			<img src="http://img.varotour.net/renew/basic_loading.gif" alt="loading" />
		</div>
	</div> -->

</div>


<script type="text/javascript">
$(function() {
	room.set_load();
});




</script>
