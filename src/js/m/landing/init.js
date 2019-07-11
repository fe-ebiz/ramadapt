$(function() {

    tabFn();
    scrollFn();
    
});

function tabFn() {
    $('.Landing .ld-tab-sect .ld-tab-list > li').on('click', function(){
        var idx = $(this).index(); 
        
        $('.ld-toggle').each(function(index, item) {
            $(item).children('li').eq(idx).addClass('on').siblings().removeClass('on'); 
            
            //console.log(item);
        });
        
        $('html, body').stop().animate({
            //190710 수정
            scrollTop : ($('#ld-cont-sect').offset().top +1)
            //scrollTop : $('#visual-sect').offset().top
        }, 0);
    });
    // 예약페이지 별도
    $('.Booking .ld-tab-sect .ld-tab-list > li').on('click', function(){
        var id = $(this).find('a').attr('href'); 
        
        $('.ld-toggle').each(function(index, item) {
            $(item).children('li').eq(idx).addClass('on').siblings().removeClass('on'); 
        });
    
        $('html, body').stop().animate({
            scrollTop: $('.ld-visual').outerHeight() + $('#header').outerHeight()
        });
        
        return false;
    });
}
function scrollFn() {
    /* 스크롤 탭 고정 */
    $(window).scroll(function(){
        var scltop = $(window).scrollTop();
        var visualH = ($('#visual-sect').height()+50);
        
        //console.log(visualHt);
        if( scltop <= 5) {
            $('.ld-btn-area').addClass('off');
        }else {
            $('.ld-btn-area').removeClass('off');
        }
        
        if( scltop <= visualH) {
            $('.ld-tab-sect').removeClass('on');
        }else {
            $('.ld-tab-sect').addClass('on');
        }
    });
}
