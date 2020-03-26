$(function () {
    $("#faq-a").on('click', function () {
        $('#wrap, #Contents').css({
            "position": "fixed"
        });
        $("#faqWrap-back").fadeIn();
        $(this).addClass('on');
    });
    $("#faqWrap .i-x").on('click', function () {
        $('#wrap, #Contents').css({
            "position": "relative"
        });
        $("#faqWrap-back").hide();
        $("#faq-a").removeClass('on');
    });
    $("#faqWrap .d1").click(function () {
        $(this).next().slideToggle('fast');
        $(this).toggleClass('on');
    });

    $("#faq .f_q").on("click", function () {
        $(this).next().slideToggle("fast");
    });
    $("#wrap .wrapperin .btn-area .btn-a").on("click", function () {
        $('#faq li').show();
    });
})