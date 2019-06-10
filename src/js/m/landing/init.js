$(function() {

    tabFn();
    scrollFn();
    
});

function tabFn() {
    $('.Landing .ld-tab-sect .ld-tab-list > li').on('click', function(){
        var idx = $(this).index(); 
        
        $('.ld-toggle').each(function(index, item) {
            $(item).children('li').eq(idx).addClass('on').siblings().removeClass('on'); 
        });
        
        $('html, body').stop().animate({
            scrollTop : $('#visual-sect').offset().top
        }, 500);
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
        var visualHt = ($('.ld-visual').height()+100);
        
        //console.log(visualHt);
        
        if( scltop <= visualHt) {
            $('.ld-tab-sect').removeClass('on');
        }else {
            $('.ld-tab-sect').addClass('on');
        }
    });
}
