$(document).on('ready', function () {
    vidWH();
	$(window).on('resize', function(){
        vidWH(); 
    }).resize();
    
    videoFn.init();
});

function vidWH(){ 
    var winWd = $(window).width(),
        winHt = $(window).height(),
        vid = $('#content .main .vid-wrap');
        
    //영상 시작시
    $('.header').addClass('vid');

    $('.header').addClass('main');

    vid.css({
        width: winWd,
        height: winHt,
    });

    $('.weather').css({'cursor' : 'pointer'}); 
        $('.vid-wrap, .weather').hover(function(){
            vid.find('.vid-txt-box').addClass('on');
            $('.weather').addClass('active');
        }, function(){
            vid.find('.vid-txt-box').removeClass('on');
            $('.weather').removeClass('active');
        });
	
    //텍스트 클릭시 이동
    $('.vid-wrap').find('.vid-txt').on('click', function(){
		var mainRestTop =	$(".goto_area").offset().top,
            gnbH =	$(".gnb").height();
        var allVar = mainRestTop-gnbH;
        
		$('html, body').stop().animate({
			scrollTop: allVar
		}, 1300, 'easeInOutQuart');
    });
}

function videoPlayer() {
    var video = document.getElementById("video");   
}
var videoFn = {
    data: function() {
        // var video = $('#video');   
        var video = document.getElementById("video");
        return {
            video: video
        }
    },
    fullScreen: function() {
        var video = this.data().video;
        console.log(video);
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.mozRequestFullScreen) {
            video.mozRequestFullScreen();
        } else if (video.webkitRequestFullscreen) {
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) {
            video.msRequestFullscreen();
        }
    },
    play: function() {
        this.data().video.play();
        // this.data().video.currentTime = 30;
    },
    stop: function() {
        this.data().video.pause();
        this.data().video.currentTime = 0;
    },
    end: function() {
        this.stop();
        this.data().video.style.display = 'none';
        $('#content .main .vid-wrap').find('.vid-txt-box').addClass('on');
    },
    init: function() {
    }
}