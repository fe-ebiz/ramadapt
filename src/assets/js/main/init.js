$(document).on('ready', function () {
    videoFn.init();

    vidWH();
	$(window).on('resize', function(){
        vidWH(); 
    }).resize();

    // var video = this.data().video;
    // var video = document.getElementById("video");
    // // console.log(video);
    // if (video.requestFullscreen) {
    //     video.requestFullscreen();
    // } else if (video.mozRequestFullScreen) {
    //     video.mozRequestFullScreen();
    // } else if (video.webkitRequestFullscreen) {
    //     video.webkitRequestFullscreen();
    // } else if (video.msRequestFullscreen) {
    //     video.msRequestFullscreen();
    // }
});

function vidWH(){ 
    var winWd = $(window).width(),
        winHt = $(window).height(),
        content = $('#content'),
        main = $('#content .main'),
        vid = $('#content .main .vid-wrap');
        
    //영상 시작시
    $('.header').addClass('vid');
    $('.header').addClass('main');

    vid.css({
        width: winWd,
        height: winHt,
    });

    if ((winWd / winHt) > (16 / 9)) {
        $('#video').css({
            width: '100%',
            height: 'auto'
        });
    } else {
        $('#video').css({
            width: 'auto',
            height: '100%'
        });
    }

    main.find('.vid-wrap').hover(function(){
        main.find('.vid-txt-box, .weather').addClass('active');
        $('#Contents .rWing').addClass('active');
    }, function(){
        main.find('.vid-txt-box, .weather').removeClass('active');
        $('#Contents .rWing').removeClass('active');
    });
	
    //텍스트 클릭시 이동
    $('.vid-wrap').find('.vid-txt').on('click', function(){
		var mainRestTop =	$("#main_event").offset().top,
            gnbH =	$(".gnb").height();
        var allVar = mainRestTop-gnbH;
        
		$('html, body').stop().animate({
			scrollTop: allVar
		}, 1300, 'easeInOutQuart');
    });
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
        // return console.log(video.requestFullscreen);
        var video = this.data().video;
        // console.log(video);
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
        // this.data().video.play();
        // this.data().video.currentTime = 31;
        // $('#content .main').find('.vid-wrap').addClass('active');
        $('#content .main').find('.vid-txt-box, .weather').addClass('active');
        $('#Contents .rWing').addClass('active');
        setTimeout(function() {
            $('#content .main').find('.vid-txt-box, .weather').removeClass('active');
            $('#Contents .rWing').removeClass('active');
        }, 1500);
    },
    stop: function() {
        this.data().video.pause();
        this.data().video.currentTime = 0;
    },
    end: function() {
        var main = $('#content .main');
        this.stop();
        this.data().video.style.display = 'none';
        main.find('.vid-wrap').unbind('mouseenter mouseleave');
        main.find('.vid-wrap').removeClass('active');
        main.find('.vid-txt-box, .weather').addClass('active');
        $('#Contents .rWing').addClass('active');
    },
    init: function() {
        // this.fullScreen();
        this.play();
    }
}