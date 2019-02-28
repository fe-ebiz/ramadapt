$(function() {
	
	menuFn();

});

//menu Function
function menuFn() {
    var bkMenu = $('.bk-menu');
    
    bkMenu.find('.btn-bk').on('mouseover', function(){
        bkMenu.find('.bk-list').stop().slideDown();
    });
    
     bkMenu.on('mouseleave', function(){
        $(this).find('.bk-list').stop().slideUp();
    });
}