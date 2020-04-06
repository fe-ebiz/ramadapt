			<?php
				switch($_GET["page"]) {
					case "1":	case "2":	case "3":	case "4":	case "5":
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
						include "./gallery_left.php";
					?>


                    <script src="http://static.ramadapt.co.kr/js/jquery.bxslider.min.js"></script>
                    <link href="http://static.ramadapt.co.kr/css/jquery.bxslider.css" rel="stylesheet" />
                    <script>
                        $(document).ready(function() {
                            var slider = $('.bxslider').bxSlider({
                                auto: true,
                                mode: 'fade',
                            });
                            var slider_01 = $('.bxslider_01').bxSlider({
                                auto: true,
                                autoControls: true,
                                mode: 'vertical',
                            });
                            var slider_02 = $('.bxslider_02').bxSlider({
                                auto: true,
                                controls: false,
                                pagerCustom: '#bx-pager1'
                            });
                            var slider_03 = $('.bxslider_03').bxSlider({
                                auto: true,
                                controls: false,
                                pager: false,
                                maxSlides: 3,
                                moveSlides: 1,
                                slideWidth: 100,
                                slideMargin: 0,
                                autoHover: true,
                            });
                            // 클릭시 멈춤 현상 해결 //
                            $(document).on('click', '.bx-next, .bx-prev', function() {
                                slider.stopAuto();
                                slider.startAuto();
                                slider_01.stopAuto();
                                slider_01.startAuto();
                            });
                            $(document).on('mouseover', '.bx-pager, #bx-pager1', function() {
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
						//181226 디럭스 수퍼더블 추가 : 성다솜
						switch($_GET["page"]) {
							case "5":
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_s1_01_01.jpg");}
                        .banner_02 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_s1_01_02.jpg");}
                        .banner_03 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_01_06.jpg");}
                        .banner_04 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_01_07.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>디럭스 수퍼더블</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 객실 안내 </span> &gt; <span class="last"><strong>디럭스 수퍼더블</strong></span>
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
                        
                       <?php
							include "./gall_breakfast.php";
					   ?>

                        <div class="acco_info">
                            <p>어디에서도 볼 수 없던 압도적인 2,200 베드사이즈! 디럭스 수퍼더블룸은<br>저희 호텔만의 자랑입니다. (기존 베드 : 퀸사이즈 1,400 / 킹사이즈 1,500)</p>
                        </div>

                        <div id="acco_box">
                            <div class="acco_tbl">
                                <table class="df_tb">
                                    <colgroup>
                                        <col width="150">
                                            <col width="*">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>침대타입</th>
                                            <td>수퍼 더블베드 사이즈(2,200) 1개</td>
                                        </tr>
                                        <tr>
                                            <th>객실 뷰</th>
                                            <td>하버 뷰 / 시티 뷰 (랜덤배정) </td>
                                        </tr>
                                        <tr>
                                            <th>수용인원</th>
                                            <td>
												성인2~3인 / 성인2인 외 유아2인까지 동반 가능(초등학교 3학년 이하)<br>
												- 베개4 + 이불2 제공(침구추가 요청시 별도 요금)<br>
												- 페이스타올4 / 바스타올4 / 생수4 / 칫솔4 / 면도기2 제공 
											</td>
                                        </tr>
										<?php //190305 정상가 추가 ?>
                                        <tr>
                                            <th>크기/정상가</th>
                                            <td>23㎡ / 340,000원</td>
                                        </tr>
                                        <tr>
                                            <th>공통사항</th>
                                            <td class="lh20">
                                                1. 초고속 무료 인터넷 및 wifi
                                                <br>2. 웰컴드링크 – 생수2병
                                                <br>3. 모닝콜 서비스
                                                <br>4. 최고급 욕실 어메니티
                                                <br>5. 필기류 제공
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>체크 인</th>
                                            <td>15:00부터 입실 가능</td>
                                        </tr>
                                        <tr>
                                            <th>체크 아웃</th>
                                            <td>11:00까지 퇴실</td>
                                        </tr>
                                    </tbody>
                                </table>
								<!-- 181226 주석처리 -->
                                <!-- <p class="mgt20 cred">* 최대 수용인원 3인 기준이며, 인원추가 시 추가비용이 발생할 수 있습니다</p> -->
                            </div>

                            <div class="req_box">
                                <p><a href="/reservation/">객실예약하기</a>
                                </p>
                            </div>

                        </div>
                        <!--//#acco_box-->
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "4":
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_04_01.jpg");}
                        .banner_02 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_04_02.jpg");}
                        .banner_03 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_04_03.jpg");}
                        .banner_04 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_04_04.jpg");}
                        .banner_05 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_04_05.jpg");}
                        .banner_06 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_04_06.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>스위트</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 객실 안내 </span> &gt; <span class="last"><strong>스위트</strong></span>
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
                            </ul>
                        </div>
                        
                       <?php
							include "./gall_breakfast.php";
					   ?>

                        <div class="acco_info">
                            <p>넓은 공간과 럭셔리한 인테리어가 고급스러움을 더하는 스위트룸은 탁트인 창밖으로 서해바다와 석양의 아름다움을 감상하실 수 있는 프리미엄 객실입니다.</p>
                        </div>

                        <div id="acco_box">
                            <div class="acco_tbl">
                                <table class="df_tb">
                                    <colgroup>
                                        <col width="150">
                                            <col width="*">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>침대타입</th>
                                            <td>퀸 사이즈 1개 + 싱글 사이즈 1개</td>
                                        </tr>
                                        <tr>
                                            <th>객실 뷰</th>
                                            <td>하버 뷰 / 시티 뷰</td>
                                        </tr>
                                        <tr>
                                            <th>수용인원</th>
                                            <td>3명</td>
                                        </tr>
										<?php //190305 정상가 추가 ?>
                                        <tr>
                                            <th>크기/정상가</th>
                                            <td>46㎡ / 400,000원</td>
                                        </tr>
                                        <tr>
                                            <th>공통사항</th>
                                            <td class="lh20">
                                                1. 초고속 무료 인터넷 및 wifi
                                                <br>2. 웰컴드링크 – 생수2병
                                                <br>3. 모닝콜 서비스
                                                <br>4. 최고급 욕실 어메니티
                                                <br>5. 필기류 제공
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>체크 인</th>
                                            <td>15:00부터 입실 가능</td>
                                        </tr>
                                        <tr>
                                            <th>체크 아웃</th>
                                            <td>11:00까지 퇴실</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="mgt20 cred">* 최대 수용인원 3인 기준이며, 인원추가 시 추가비용이 발생할 수 있습니다</p>
                            </div>

                            <div class="req_box">
                                <p><a href="/reservation/">객실예약하기</a>
                                </p>
                            </div>

                        </div>
                        <!--//#acco_box-->
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "3":
					?>
					<style>
                        /* 배너사이즈와 위치 */
                        #s_banner_wrap {width:750px; height:450px; position: relative; margin:0px 0;}
                        .banner_01 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_03_01.jpg");}
                        .banner_02 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_03_02.jpg");}
                        .banner_03 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_03_03.jpg");}
                        .banner_04 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_03_04.jpg");}
                        .banner_05 {width:750px; height:450px; background:url("http://img.ramadapt.co.kr/gall_02_03_05.jpg");}
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>트리플룸</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 객실 안내 </span> &gt; <span class="last"><strong>트리플룸</strong></span>
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
                            </ul>
                        </div>
                        
                       <?php
							include "./gall_breakfast.php";
					   ?>

                        <div class="acco_info">
                            <p>한층 여유롭고 안락한 공간으로 설계된 패밀리 트윈룸은 가족과 함께 편안한 휴식을 즐기실 수 있습니다 .</p>
                        </div>

                        <div id="acco_box">
                            <div class="acco_tbl">
                                <table class="df_tb">
                                    <colgroup>
                                        <col width="150">
                                            <col width="*">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>침대타입</th>
                                            <td>퀸 사이즈 1개 + 싱글 사이즈 1개</td>
                                        </tr>
                                        <tr>
                                            <th>객실 뷰</th>
                                            <td>하버 뷰 / 시티 뷰</td>
                                        </tr>
                                        <tr>
                                            <th>수용인원</th>
                                            <td>3명</td>
                                        </tr>
										<?php //190305 정상가 추가 ?>
                                        <tr>
                                            <th>크기/정상가</th>
                                            <td>24㎡ / 350,000원</td>
                                        </tr>
                                        <tr>
                                            <th>공통사항</th>
                                            <td class="lh20">
                                                1. 초고속 무료 인터넷 및 wifi
                                                <br>2. 웰컴드링크 – 생수2병
                                                <br>3. 모닝콜 서비스
                                                <br>4. 최고급 욕실 어메니티
                                                <br>5. 필기류 제공
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>체크 인</th>
                                            <td>15:00부터 입실 가능</td>
                                        </tr>
                                        <tr>
                                            <th>체크 아웃</th>
                                            <td>11:00까지 퇴실</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="mgt20 cred">* 최대 수용인원 3인 기준이며, 인원추가 시 추가비용이 발생할 수 있습니다</p>
                            </div>

                            <div class="req_box">
                                <p><a href="/reservation/">객실예약하기</a>
                                </p>
                            </div>

                        </div>
                        <!--//#acco_box-->
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "2":
					?>
					<style>
                        /* 배너사이즈와 위치 */

                        #s_banner_wrap {
                            width: 750px;
                            height: 450px;
                            position: relative;
                            margin: 0px 0;
                        }

                        .banner_01 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_02_01.jpg");
                        }

                        .banner_02 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_02_02.jpg");
                        }

                        .banner_03 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_02_03.jpg");
                        }

                        .banner_04 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_02_04.jpg");
                        }

                        .banner_05 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_02_05.jpg");
                        }
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>디럭스 트윈 / 패밀리 트윈, 더블</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 객실 안내 </span> &gt; <span class="last"><strong>디럭스 트윈 / 패밀리 트윈, 더블</strong></span>
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
                            </ul>
                        </div>
                        
                       <?php
							include "./gall_breakfast.php";
					   ?>

                        <div class="acco_info">
                            <p>심플함과 모던함을 강조한 트윈룸은 비즈니스 공간 및 단체여행객들로 하여금 최고의 만족을 느끼실 수 있습니다.</p>
                        </div>

                        <div id="acco_box">
                            <div class="acco_tbl">
                                <table class="df_tb">
                                    <colgroup>
                                        <col width="150">
                                            <col width="*">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>침대타입</th>
                                            <td>싱글 사이즈 2개</td>
                                        </tr>
                                        <tr>
                                            <th>객실 뷰</th>
                                            <td>하버 뷰 / 시티 뷰</td>
                                        </tr>
                                        <tr>
                                            <th>수용인원</th>
                                            <td>디럭스트윈(2명) / 패밀리트윈(3명) / 패밀리더블(4명)</td>
                                        </tr>
										<?php //190305 정상가 추가 ?>
                                        <tr>
                                            <th>크기/정상가</th>
                                            <td>23㎡ / 디럭스 트윈 330,000원, 패밀리 트윈 380,000원, 패밀리 더블 400,000원</td>
                                        </tr>
                                        <tr>
                                            <th>공통사항</th>
                                            <td class="lh20">
                                                1. 초고속 무료 인터넷 및 wifi
                                                <br />2. 웰컴드링크 – 생수2병
                                                <br />3. 모닝콜 서비스
                                                <br />4. 최고급 욕실 어메니티
                                                <br />5. 필기류 제공
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>체크 인</th>
                                            <td>15:00부터 입실 가능</td>
                                        </tr>
                                        <tr>
                                            <th>체크 아웃</th>
                                            <td>11:00까지 퇴실</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="mgt20 cred">
									* 최대 수용인원 기준이며, 인원추가 시 추가비용이 발생할 수 있습니다
									<br><br>
									* 반려동물 동반 객실 이용안내 (패밀리트윈)<br>
									1. 동물은 1마리 까지 동반 투숙 가능하며 1마리당 10kg으로 제한되어있습니다.<br>
									2. 반려동반 객실 구비물품 : 식기 및 물그릇, 배변판+패드<br>
									3. 입실 전 미리 프론트에 알려주시기 바랍니다.<br>
									- 기본 예방접종을 하지 않은 동물은 투숙이 불가합니다.<br>
									<!-- - 예방 접종카드 미확인 시 투숙이 불가능하며 예방접종 확인서를 반드시 프론트에 제시해 주세요. -->
									- 입실 시 프론트에서 애완견 관련 서약서에 동의 및 서명을 부탁드립니다.<br>
									&nbsp;&nbsp;(최근 3개월이내 예방접종을 하였음, 시설내에서는 강아지를 안고 다니겠음 등의 서약 내용) <br>
									4. 이용 시 또는 이용 후 다음 분을 위해 아래의 내용을 지켜주시기 바랍니다. <br>
									- 외출 후 객실 입실 시 동물의 발을 닦아주시기 바랍니다.<br>
									- 배설물은 변기에 버려주시고 패드는 위생팩에 담아 휴지통에 버려 주세요.<br>
									- 침구 비품 등 설비 등을 파손 및 오염시키는 경우 별도 수리비 등이 부과됩니다. (체크인 시, 카드 오픈 또는 현금 보증 요청) <br>
									- 안전을 위하여 주차장, 엘리베이터, 로비에서는 애완견을 꼭 안거나 하네스를 착용해 주세요.<br>
									5. 반려동물 동반이용 시 객실요금 외 별도 요금이 부과됩니다. (일별 30,000원)<br>
									6. 더 자세한 사항은 프론트로 연락해 주십시오. ☎ <?=reserve_tel?><br>
								</p>
                            </div>

                            <div class="req_box">
                                <p><a href="/reservation/">객실 예약하기</a>
                                </p>
                            </div>

                        </div>
                        <!--//#acco_box-->
                    </div>
                    <!--//#right_content-->
					<?php
							break;
							case "1":
							default:
					?>
                    <style>
                        /* 배너사이즈와 위치 */

                        #s_banner_wrap {
                            width: 750px;
                            height: 450px;
                            position: relative;
                            margin: 0px 0;
                        }

                        .banner_01 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_01_01.jpg");
                        }

                        .banner_02 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_01_02.jpg");
                        }

                        .banner_03 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_01_03.jpg");
                        }

                        .banner_04 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_01_04.jpg");
                        }

                        .banner_05 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_01_05.jpg");
                        }

                        .banner_06 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_01_06.jpg");
                        }

                        .banner_07 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_01_07.jpg");
                        }

                        .banner_08 {
                            width: 750px;
                            height: 450px;
                            background: url("http://img.ramadapt.co.kr/gall_02_01_08.jpg");
                        }
                    </style>

                    <div id="right_content">
                        <div id="pg_title">
                            <h2>디럭스 더블 / 테라스 더블</h2>
                            <div id="rocation">
                                <span><a href="/"><img src="http://img.ramadapt.co.kr/icon_home.gif" class="img"></a> 객실 안내 </span> &gt; <span class="last"><strong>디럭스 더블 / 테라스 더블</strong></span>
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
                                <li class="banner_08"></li>
                            </ul>
                        </div>
                        
                        <?php
							include "./gall_breakfast.php";
					   ?>

                        <div class="acco_info">
                            <p>아늑한 공간을 활용해 스마트하게 배치된 침구와 가구는 안정감과 세련됨을 연출하며,
                                <br>업무와 휴식 의 만족을 동시에 선사합니다.</p>
                        </div>
                        <div id="acco_box">
                            <div class="acco_tbl">
                                <table class="df_tb">
                                    <colgroup>
                                        <col width="150">
                                            <col width="*">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>침대타입</th>
                                            <td>퀸 사이즈 1개</td>
                                        </tr>
                                        <tr>
                                            <th>객실 뷰</th>
                                            <td>하버 뷰 / 시티 뷰</td>
                                        </tr>
                                        <tr>
                                            <th>수용인원</th>
                                            <td>2명</td>
                                        </tr>
										<?php //190305 정상가 추가 ?>
                                        <tr>
                                            <th>크기/정상가</th>
                                            <td>23㎡ / 디럭스 더블 330,000원, 테라스 더블 400,000원</td>
                                        </tr>
                                        <tr>
                                            <th>공통사항</th>
                                            <td class="lh20">
                                                1. 초고속 무료 인터넷 및 wifi
                                                <br />2. 웰컴드링크 – 생수2병
                                                <br />3. 모닝콜 서비스
                                                <br />4. 최고급 욕실 어메니티
                                                <br />5. 필기류 제공
                                                <br />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>체크인</th>
                                            <td>15:00부터 입실 가능</td>
                                        </tr>
                                        <tr>
                                            <th>체크아웃</th>
                                            <td>11:00까지 퇴실</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="mgt20 cred">* 최대 수용인원 2인 기준이며, 인원추가 시 추가비용이 발생할 수 있습니다</p>
                            </div>

                            <div class="req_box">
                                <p><a href="/reservation/">객실 예약하기</a>
                                </p>
                            </div>

                        </div>
                        <!--//#acco_box-->
                    </div>
                    <!--//#right_content-->
					<?php
							break;
						}
					?>
                </div>
                <!--//.centerThis-->
            </div>
            <!--//#sub_content-->