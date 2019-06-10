$(function() {

    tabFn();
    scrollFn();
    
});

function tabFn() {
    $('.Landing .ld-tab-sect .ld-tab-list li').on('click', function(){
        var id = $(this).find('a').attr('href'); 
        
        $(this).siblings('li').removeClass('on'); 
        $(this).addClass('on'); 
        
        $('div[class*="ld-sect"]').stop().hide();
        $(id).stop().show();
        
        $('html, body').stop().animate({
            scrollTop : 0
        }, 500);
    });
    // 예약페이지 별도
    $('.Booking .ld-tab-sect .ld-tab-list li').on('click', function(){
        var id = $(this).find('a').attr('href'); 
        
        $(this).siblings('li').removeClass('on'); 
        $(this).addClass('on'); 
        
        $('div[class*="ld-sect"]').stop().hide();
        $(id).stop().show();
    
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
