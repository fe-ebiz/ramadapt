$(function() {

    tabFn();
    scrollFn();
    
});

function tabFn() {
    $('.Landing .ld-tab-sect .ld-tab-list > li, .Landing .ld-bn-sect .ld-bn-list > li').on('click', function(){
        var idx = $(this).index(); 
        var hdH = $('#header').height(); 
        
        if( $(this).hasClass('nope') ) {

        }else {
            $('.ld-toggle').each(function(index, item) {
                $(item).children('li').eq(idx).addClass('on').siblings().removeClass('on'); 

            });

            //190710 수정
            $('html, body').stop().animate({
                scrollTop : ($('#tab-sect').offset().top - hdH)
            }, 500);
        }
        
        return false;
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
    $(window).scroll(function(){
        var scltop = $(window).scrollTop();
        var visualHt = $('#ld-cont-sect').offset().top;
        
        if( scltop <= visualHt) {
            $('.ld-bn-sect').removeClass('on');
        }else {
            $('.ld-bn-sect').addClass('on');
        }
    });
    
    
    
    // 스크롤 탭 고정 
   /* $(window).scroll(function(){
        var scltop = $(window).scrollTop();
        var visualHt = ($('.ld-visual').height()+100);
        
        //console.log(visualHt);
        
        if( scltop <= visualHt) {
            $('.ld-tab-sect').removeClass('on');
        }else {
            $('.ld-tab-sect').addClass('on');
        }
    });*/
}
