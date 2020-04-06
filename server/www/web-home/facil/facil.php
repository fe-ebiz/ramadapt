			<?php
				switch($_GET["page"]) {
					case "1":	case "2":	case "3":	case "4":	case "5":	case "6":	case "7":	case "8":	case "9":
						$_GET["page"] = $_GET["page"];
					break;
					default:
						$_GET["page"] = "1";
					break;
				}
			?>
			<div id="sub_visual">
                <div class="centerThis">
                    <h2>Ramada Encore Pyeongtaek Hotel</h2>
                </div>
                <!--//.centerThis-->
            </div>
            <!--//#sub_visual-->

            <div id="sub_content" class="group">
                <div class="centerThis">
                    <?php
						include "./facil_left.php";
					?>

                    <script src="<?=base_js?>/jquery.bxslider.min.js"></script>
                    <link href="<?=base_css?>/jquery.bxslider.css" rel="stylesheet">
                    <script>
                        $(document).ready(function(){
                        	var slider = $('.bxslider').bxSlider({
                        			auto: true, mode:'fade',
                        		});
                        	var slider_01 =	$('.bxslider_01').bxSlider({
                        			auto: true,autoControls: true, mode:'vertical',
                        		});
                        	var slider_02 =	$('.bxslider_02').bxSlider({
                        			auto: true,controls:false,pagerCustom: '#bx-pager1'
                        		});
                        	var slider_03 =	$('.bxslider_03').bxSlider({
                        			auto: true,controls:false,pager:false,maxSlides: 3,moveSlides:1,  slideWidth: 100,slideMargin:0,autoHover:true,
                        		});
                        		$(document).on('click','.bx-next, .bx-prev',function() {
                        		slider.stopAuto();
                        		slider.startAuto();
                        		slider_01.stopAuto();
                        		slider_01.startAuto();
                        		});
                        		$(document).on('mouseover','.bx-pager, #bx-pager1',function() {
                        		slider.stopAuto();
                        		slider.startAuto();
                        		slider_01.stopAuto();
                        		slider_01.startAuto();
                        		slider_02.stopAuto();
                        		slider_02.startAuto();
                        		});
                        });
                    </script>
					<?php
						switch($_GET["page"]) {
							case "9":	//가상오피스
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/office_01.jpg");}
                        .banner_02 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/office_02.jpg");}
                        .banner_03 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/office_03.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>가상오피스</h2>
                            <div id="rocation">
                                <span><a href="/index.html"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 연회&amp;부대시설 </span> &gt; <span class="last"><strong>가상오피스</strong></span>
                            </div>
                            <!--//#rocation-->
                        </div>
                        <!--//#title_box-->
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                                <li class="banner_02"></li>
                                <li class="banner_03"></li>
                            </ul>
                        </div>

                        <div class="faci_info">
                            <p class="fc-red">
                                "라마다의 품격을 더한 비즈니스 스타트업을 지원해 드립니다."
                                <br>편리한 가상오피스(비상주 사무실)을 통해서 당신의 비즈니스를 실현하세요.
                            </p>
                            <div class="faci-info-box">
                                <p class="p-1">가상오피스(비상주사무실)는 다음 분들께 꼭 필요한 서비스입니다.</p>
                                <ul class="faci-info-list">
                                    <li>사업자주소가 자택이 아닌 평택이 필요한 경우</li>
                                    <li>평택에서 사업자 주소를 두고 영업이 필요한 경우</li>
                                    <li>사업자주소 이전을 위해 잠시 주소가 필요한 경우</li>
                                    <li>사업의 영업활동이 사무실 보다 외부 업무가 많은 업종</li>
                                    <li>오프라인 보다 온라인의 영업활동이 많은 업종</li>
                                    <li>전자상거래 업무가 위주인 업종</li>
                                    <li>해외에 거주, 국내 사업을 위해 사업자등록증이 필요한 경우</li>
                                    <li>프리랜서 및 투잡의 용도로 사업자등록이 필요한 경우</li>
                                </ul>
                                <div class="faci-txt-box">
                                    <span>※ 코워킹스페이스(비지정석) 제공</span>
                                    <ul class="faci-info-list">
                                        <li>공동(공유)사무실로, 다양한 업무분야의 분들이 하나의 공간을 함께 사용</li>
                                        <li>인터넷 제공 및 프린터 등의 사무 집기 이용가능</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            <table class="df_tb">
                                <colgroup>
                                    <col width="150">
                                        <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>이용 시간</th>
                                        <td>상시 이용가능(24시간 운영)</td>
                                    </tr>
                                    <tr>
                                        <th>이용 문의</th>
                                        <td>010-4429-3019 / onbiz@ebiznetworks.co.kr</td>
                                    </tr>
                                    <tr>
                                        <th>홈페이지</th>
                                        <td><a href="http://onbiz1.co.kr" target="_blank" title="온비즈오피스로 페이지 이동">http://onbiz1.co.kr</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>위치</th>
                                        <td>가상오피스(비상주사무실) - 1층 / 코워킹스페이스(비지정석) - 2층</td>
                                    </tr>
                                    <tr>
                                        <th>기타 안내</th>
                                        <td>인터넷 및 워드작업, 프린터 사용가능</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="req_box">
                            <p><a href="http://onbiz1.co.kr" target="_blank" title="온비즈오피스로 페이지 이동">자세한 내용보기</a>
                            </p>
                        </div>
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "8":	//세탁실
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_08_01.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>세탁실</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 연회&amp;부대시설 </span> &gt; <span class="last"><strong>세탁실</strong></span>
                            </div>
                            <!--//#rocation-->
                        </div>
                        <!--//#title_box-->
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                            </ul>
                        </div>

                        <div class="faci_info">
                            <p>세탁이 필요한 고객님들을 위한 세탁&amp;건조실을 운영하고 있습니다.
                                <br>고객님들의 청결함을 위해 노력하는 라마다평택호텔 앙코르가 되겠습니다.</p>
                        </div>

                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            <table class="df_tb">
                                <colgroup>
                                    <col width="150">
                                        <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>서비스 내용</th>
                                        <td>세탁기&amp;드라이기 무료제공</td>
                                    </tr>
                                    <tr>
                                        <th>이용 시간</th>
                                        <td>24시간</td>
                                    </tr>
                                    <tr>
                                        <th>위 치</th>
                                        <td>3층 (310호)</td>
                                    </tr>
                                    <tr>
                                        <th>예약 문의</th>
                                        <td><?=front_tel?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "7":	//야외테라스
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_07_01.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>야외테라스</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 연회&amp;부대시설 </span> &gt; <span class="last"><strong>야외테라스</strong></span>
                            </div>
                            <!--//#rocation-->
                        </div>
                        <!--//#title_box-->
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                            </ul>
                        </div>

                        <div class="faci_info">
							<p>
								현재 더 좋은 공간 제공을 위한 공사중으로 이용이 불가합니다.<br />
								빠른시일 내에 더 나은모습으로 찾아뵙겠습니다. 감사합니다.<br />
							</p>
                            <!--<p>라마다평택호텔 앙코르에서는 매주 금요일과 토요일에 1층 테라스에서 바비큐 서비스 파티를 시작합니다.</p>-->
                        </div>

                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            <table class="df_tb">
                                <colgroup>
                                    <col width="150">
                                        <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>메뉴</th>
                                        <td>훈제치킨 / 돼지고기 바비큐 / 소고기 바비큐
                                            <br>(날씨 사정에 따라 일정이 변경될 수 있습니다)</td>
                                    </tr>
                                    <tr>
                                        <th>이용 시간</th>
                                        <!--<td>매주 금요일, 토요일</td>-->
										<td>
										공사중으로 인해 운영하지 않습니다.
										</td>
                                    </tr>
                                    <tr>
                                        <th>위 치</th>
                                        <td>1층 테라스</td>
                                    </tr>
                                    <tr>
                                        <th>예약 문의</th>
                                        <td><?=front_tel?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "6":	//펫호텔
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_06_01.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>펫호텔</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 연회&amp;부대시설 </span> &gt; <span class="last"><strong>펫호텔</strong></span>
                            </div>
                            <!--//#rocation-->
                        </div>
                        <!--//#title_box-->
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                            </ul>
                        </div>

                        <div class="faci_info">
                            <p>라마다평택호텔 앙코르의 펫호텔 서비스는 고객님을 대신하여 고객님의 반려동물을 정성껏 돌보아 드립니다.</p>
                        </div>

                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            <table class="df_tb">
                                <colgroup>
                                    <col width="150">
                                        <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>서비스 내용</th>
                                        <td>펫 호텔 / 펫 미용 / 펫 용품 / 펫 그루밍</td>
                                    </tr>
                                    <tr>
                                        <th>이용 시간</th>
                                        <td>07:00 ~ 18:00</td>
                                    </tr>
                                    <tr>
                                        <th>예약 문의</th>
                                        <td><?=front_tel?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "5":	//룸서비스
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_05_01.jpg");}
                        .banner_02 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_05_02.jpg");}
                        .banner_03 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_05_03.jpg");}
                        .banner_04 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_05_04.jpg");}
                        .banner_05 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_05_05.jpg");}
                        .banner_06 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_05_06.jpg");}
                        .banner_07 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_05_07.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>룸서비스</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 다이닝 </span> &gt; <span class="last"><strong>룸서비스</strong></span>
                            </div>
                            <!--//#rocation-->
                        </div>
                        <!--//#title_box-->
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                                <li class="banner_02"></li>
                                <li class="banner_03"></li>
                                <li class="banner_04"></li>
                                <li class="banner_05"></li>
                                <li class="banner_06"></li>
                                <li class="banner_07"></li>
                            </ul>
                        </div>

                        <div class="faci_info">
                            <p>라마다평택호텔 앙코르의 룸서비스는 각종 다양한 메뉴를 구비하여 어른과 아이들 모두 즐길 수 있습니다.</p>
                        </div>

                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            <table class="df_tb">
                                <colgroup>
                                    <col width="150">
                                        <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>메뉴</th>
                                        <td>
                                            1. 치킨&amp;샐러드&amp;맥주 : 25,000원
                                            <br>2. 과일&amp;샐러드&amp;와인2잔 : 25,000원
                                            <br>3. 피자 : 18,000원
                                            <br>4. 파스타(토마토&amp;크림 중 택1) : 15,000원
                                            <br>5. 클럽 샌드위치&amp;샐러드 : 10,000원
                                            <br>6. 치킨커리&amp;샐러드 : 18,000원
                                            <br>7. 야채커리&amp;샐러드 : 18,000원
                                            <br>8. 함박스테이크&amp;샐러드 : 15,000원
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>추가 주문 문의</th>
                                        <td>프론트 <?=front_tel?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "4":	//건식 사우나 190111 이사님 요청으로 비즈니스룸으로 변경  190112 gall_03_04_01 -> gall_03_04_02 이미지 교체
					?>
					<style>
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_04_02.jpg");}
                    </style>
					<div id="right_content">
						<div id="pg_title">
							<h2>비즈니스 룸</h2>
							<div id="rocation">
								<span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 연회&amp;부대시설 </span> &gt; <span class="last"><strong>비즈니스 룸</strong></span>
							</div>
						</div>
						<div id="s_banner_wrap">
							<ul class="bxslider">
								<li class="banner_01"></li>
							</ul>
						</div>
					
						<div class="faci_info">
							<p>"편안한 비즈니스지원"
								<br>라마다평택호텔 앙코르의 비즈니스룸에서 고객님의 업무를 편안히 처리하세요. </p>
						</div>
					
						<br>
						<br>
						<div id="company02">
							<p class="tb_title">
								이용 안내
							</p>
							<table class="df_tb">
								<colgroup>
									<col width="150">
										<col width="*">
								</colgroup>
								<tbody>
									<tr>
										<th>이용 시간</th>
										<td>상시 이용가능(24시간 운영)</td>
									</tr>
									<tr>
										<th>이용 문의</th>
										<td>1층 프론트 문의(이용방법 안내와 비지니스룸 키발급)</td>
									</tr>
									<tr>
										<th>위 치</th>
										<td>3층 311호 비지니스 룸</td>
									</tr>
									<tr>
										<th>기타안내</th>
										<td>인터넷 및 워드작업 가능. 프린터 사용가능</td>
									</tr>
								</tbody>
							</table>
					
						</div>
					</div>

                    <!-- <div id="right_content">
                        <div id="pg_title">
                            <h2>건식 사우나</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 부대시설 </span> &gt; <span class="last"><strong>건식 사우나</strong></span>
                            </div>
                        </div>
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                            </ul>
                        </div>
                    
                        <div class="faci_info">
                            <p>"또하나의 힐링타임"
                                <br>라마다평택호텔 앙코르의 건식 사우나가 고객님의 심신을 맑고 건강하게 지켜드립니다.</p>
                        </div>
                    
                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            <table class="df_tb">
                                <colgroup>
                                    <col width="150">
                                        <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>이용 시간</th>
                                        <td>07:00 ~ 20:00</td>
                                    </tr>
                                    <tr>
                                        <th>이용 문의</th>
                                        <td>사전 문의 및 예약</td>
                                    </tr>
                                    <tr>
                                        <th>위 치</th>
                                        <td>2층</td>
                                    </tr>
                                </tbody>
                            </table>
                    
                        </div>
                    </div> -->
                    <!--//#right_content-->
					<?php
							break;
							case "3":	//컨퍼런스룸
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_03_01.jpg");}
                        .banner_02 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_03_02.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>컨퍼런스룸</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 연회&amp;부대시설 </span> &gt; <span class="last"><strong>컨퍼런스룸</strong></span>
                            </div>
                            <!--//#rocation-->
                        </div>
                        <!--//#title_box-->
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                                <li class="banner_02"></li>
                            </ul>
                        </div>

                        <div class="faci_info">
                            <p>라마다평택호텔 앙코르의 컨퍼런스룸은 비즈니스 미팅, 교육은 물론 소규모 연회와 회사 워크샵 등 다용도로 사용할 수 있는 공간입니다.</p>
                        </div>

                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            
							<?php	//190226 내용변경 : 성다솜	?>
                            <table class="df_tb">
                                <colgroup>
                                    <col width="150">
                                    <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>컨퍼런스룸</th>
                                        <td>
                                            ㆍ루비홀(大컨퍼런스룸) : 수용인원 최대 130명<br>ㆍ토파즈홀(小컨퍼런스룸) : 수용인원 최대 50명
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>이용 시간</th>
                                        <td>07:00 ~ 20:00 (1시간 단위)</td>
                                    </tr>
                                    <tr>
                                        <th>위 치</th>
                                        <td>호텔 2층</td>
                                    </tr>
                                    <tr>
                                        <th>이용 문의</th>
                                        <td><?=front_tel?></td>
                                    </tr>
                                    <tr>
                                        <th>요금 및 단체문의</th>
                                        <td><?=group_tel?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "2":	//휘트니스
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_02_01.jpg");}
                        .banner_02 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_02_02.jpg");}
                        .banner_03 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_02_03.jpg");}
                        .banner_04 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_03_02_04.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>휘트니스</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 연회&amp;부대시설 </span> &gt; <span class="last"><strong>휘트니스</strong></span>
                            </div>
                            <!--//#rocation-->
                        </div>
                        <!--//#title_box-->
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                                <li class="banner_02"></li>
                                <li class="banner_03"></li>
                                <li class="banner_04"></li>
                            </ul>
                        </div>

                        <div class="faci_info">
                            <p>라마다평택호텔 앙코르 휘트니스 센터는 생동감있는 인테리어와 안전하고 고급스러운 운동기구를 비치하여 투숙객 여러분의 여행과 휴식을 더욱 건강하고 쾌적하게 해드립니다.</p>
                        </div>

                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            <table class="df_tb">
                                <colgroup>
                                    <col width="150">
                                        <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>이용 시간</th>
                                        <td>06:00 ~ 22:00</td>
                                    </tr>
                                    <tr>
                                        <th>이용 문의</th>
                                        <td><?=front_tel?> (프런트데스크)</td>
                                    </tr>
                                    <tr>
                                        <th>위 치</th>
                                        <td>2층</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							default:
							case "1":	//레스토랑
					?>
                    <style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("<?=base_img?>/gall_03_01_01.jpg");}
                        .banner_02 {width:750px; height:450px; background:url("<?=base_img?>/gall_03_01_02.jpg");}
                        .banner_03 {width:750px; height:450px; background:url("<?=base_img?>/gall_03_01_03.jpg");}
                        .banner_04 {width:750px; height:450px; background:url("<?=base_img?>/gall_03_01_04.jpg");}
                        .banner_05 {width:750px; height:450px; background:url("<?=base_img?>/gall_03_01_05.jpg");}
                        .banner_06 {width:750px; height:450px; background:url("<?=base_img?>/gall_03_01_06.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>레스토랑</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="<?=base_img?>/icon_home.gif" class="img"></a> 다이닝 </span> &gt; <span class="last"><strong>레스토랑</strong></span>
                            </div>
                            <!--//#rocation-->
                        </div>
                        <!--//#title_box-->
						
						<?php	//190226 이미지 배너 추가 : 성다솜	?>
						<!-- <figure class="banner-img">
						    <img src="<?=base_img?>/ramad_event_abf.jpg" alt="평일 숙박고객 무료조식 이벤트">
						</figure>
						
                        <div id="s_banner_wrap">
                            <ul class="bxslider">
                                <li class="banner_01"></li>
                                <li class="banner_02"></li>
                                <li class="banner_03"></li>
                                <li class="banner_04"></li>
                                <li class="banner_05"></li>
                                <li class="banner_06"></li>
                            </ul>
                        </div> -->
						<?php //181109 노효림대리님 요청으로 텍스트 추가 : 양경식?>
						<?php	//181129 남경아주임 요청으로 텍스트 추가 : 이준혁	?>
						<?php	//181211 남경아주임 요청으로 기간 20일로 변경 : 성다솜	?>
						<!--<p style="font-size:20px; font-weight:bold; text-align:center; margin-top:20px; margin-left:25px;">
							※12월 20일까지 레스토랑 내부 수리로 인해, 조식 및 식사이용이 불가합니다.<br>좀 더 나은 모습으로 찾아뵙겠습니다. 감사합니다.
						</p>-->

                        <div class="faci_info">
							<!--<p>
								<b style="font-size:20px;">주중 투숙객 조식이용 무료(주말 및 공휴일, 공휴일전일 제외)<br/></b>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 하기 날짜는 무료조식 이용이 불가능합니다.<br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12월 : 23,24,25,29,30,31<br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1월 : 1,5,6,12,13,14,19,20,26,27<br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2월 : 2~6,9,10,16,17,23,24<br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 조식메뉴 : 빵(모닝빵/식빵/와플빵), 쥬스 2종, 우유, 잼 3종,<br />
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;씨리얼 3종, 소세지 볶음, 스프, 밥, 국, 김치<br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 이용요금 : 대인 15,000 -> 12,000원 / 소인 12,000원 -> 9,900원<br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 이용장소 : 2층<br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 이용시간 : 07:00 ~ 10:00<br/><br/>
							</p>-->
                            <p>탁트인 전망과 감각적인 인테리어로 고객 여러분의 행복한 아침을 열어드릴 저희 레스토랑은 신선한 재료를 사용한 다양한 메뉴와 최대 200명까지 수용이 가능한 넓은 공간을 자랑합니다.</p>
                        </div>

                        <br>
                        <br>
                        <div id="company02">
                            <p class="tb_title">
                                이용 안내
                            </p>
                            <?php if(date("Y-m-d") < "2019-08-13") { ?>
                            <p>
                                <br>호텔 2층 조식당 내부공사로 인한 이용불가안내<br><br>

                                내용 : 호텔 2층 레스토랑 내부공사 <br>
                                이용불가 기간 : 19/08/01~19/08/12 <br>
                                불가피하게 2층 레스토랑이 내부 공사에 들어가게 되었습니다.  <br>
                                해당 기간 동안에는 고객님들께서 조식 이용이 불가하오니 참고 부탁드립니다.  <br>
                                대단히 죄송스럽게 생각하고 있으며 더욱 나은 서비스로 보답 드리는 라마다 앙코르 평택이 되겠습니다. <br>
                                고객님들께 대단히 죄송합니다. <br>
                            </p>
                            <?php } ?>
							<?php	//190226 내용변경 : 성다솜	?>
					    	<table class="df_tb">
					    		<colgroup>
					    			<col width="150">
					    			<col width="*">
					    		</colgroup>
					    		<tbody>
                                    <!--조식뷔페<br>
                                    ★ 금~토요일,  공휴일/연휴 입실 고객<br>
                                    - 대인(8세이상) 정상가 15,000원 → 온라인할인가 <span class="fc-red"><?=breakfast_adult?></span>원<br>
                                    - 소인(36개월이상~7세이하) 정상가 12,000원 → 온라인할인가 <span class="fc-red"><?=breakfast_kids?></span>원<br>
                                    <br>
                                    ★ 일~목요일 입실 고객 무료(객실당 수용인원 기준)-->
					    			<!-- <tr>
					    				<th>메뉴 및 이용료금액</th>
					    				<td>

											<?php	if(date("Yn") == "20193") {?>
											<b>▶<?=date("n")?>월 투숙객 유료조식 할인◀ </b><br />
											<?php	}	?>
											1. 주중 무료조식 (주말/공휴일 제외)<br />
											메뉴 : 빵3종, 주스2종, 우유, 잼3종, 씨리얼3종, 소세지볶음, 스프, 밥, 국, 김치<br />
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(주중에는 유료조식 이용이 불가합니다.)<br /><br />

											2. 주말 유료조식(주말/공휴일/공휴일 전일)<br />
											메뉴 : 아메리칸조식뷔페(ABF) 풀패키지(주말에는 무료조식 이용 불가합니다.)<br />
											이용요금 : 대인(8세 이상) 15,000원 → (할인가) <?=breakfast_adult?>원<br />
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											소인(7세 이하~36개월 이상) 12,000원 → (할인가) <?=breakfast_kids?>원<br />
                                        </td>
					    			</tr> -->
					    			<tr>
					    				<th>영업 시간</th>
					    				<td>07:00~09:00 / 마지막입장 : 08:30 (유료조식은 10:00시 까지 운영합니다.)</td>
					    			</tr>
					    			<tr>
					    				<th>수용인원</th>
					    				<td>최대 200명</td>
					    			</tr>
					    			<tr>
					    				<th>위치</th>
					    				<td>호텔 2층</td>
					    			</tr>
					    			<tr>
					    				<th>수용인원</th>
					    				<td><?=front_tel?> / 단체예약 문의 :  <?=group_tel?></td>
					    			</tr>
					    		</tbody>
					    	</table>

                        </div>
                    </div>
                    <!--//#right_content-->
					<?php
						break;
						}
					?>
                </div>
                <!-- //.centerThis -->
            </div>
            <!-- //#sub_content -->