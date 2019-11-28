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
        // 클릭시 멈춤 현상 해결 //
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
