$(document).on('ready', function () {
    videoFn.init();

    vidWH();
	$(window).on('resize', function(){
        vidWH(); 
    }).resize();

    deviceFn();
});

function vidWH(){ 
    var winWd = $(window).width(),
        winHt = $(window).height(),
        main = $('#content .main'),
        vid = $('#content .main .vid-wrap');
        
    //영상 시작시
    $('.header').addClass('vid');

    $('.header').addClass('main');

    vid.css({
        width: winWd,
        height: winHt,
    });

    if ((3 / 5) < (winWd / winHt)) {
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

    main.find('.vid-wrap.active').hover(function(){
        main.find('.vid-txt-box, .weather').addClass('active');
    }, function(){
        main.find('.vid-txt-box, .weather').removeClass('active');
    });

    //텍스트 클릭시 이동
    $('.vid-wrap').find('.vid-txt').on('click', function(){
		var mainRestTop =	$(".goto_area").offset().top,
            gnbH =	$(".gnb").height();
        // var allVar = mainRestTop-gnbH;
        var allVar = mainRestTop;
        
		$('html, body').stop().animate({
			scrollTop: allVar
		}, 1300, 'easeInOutQuart');
    });
}

function deviceFn() {
    var main = $('#content .main');

    // var userAgent = navigator.userAgent;
    var pc_device = "win16|win32|win64|mac|macintel";
 
    if ( navigator.platform ) {
    
        if ( pc_device.indexOf(navigator.platform.toLowerCase()) < 0 ) {
            //console.log('MOBILE');
            if (isIOS()) {
                $('#video').hide();    
                // alert('IOS 접속')
            } else {
                // $('#video').css({
                //     width: 'auto',
                //     height: '100%'
                // });
            }
            // window.location.href = 'http://m.ramadapt.co.kr/'
        } else {
            //console.log('PC');
            //window.location.href = 'http://ramadapt.co.kr/'
            
        }
    }
}

function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}
function isIOS() {
    return /iPhone|iPad|iPod/i.test(navigator.userAgent);
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
        // this.data().video.currentTime = 0;
        $('#content .main').find('.vid-wrap').addClass('active');
        if (!isIOS()) {
            // console.log('work');
            $('#content .main').find('.vid-txt-box, .weather').addClass('active');
            setTimeout(function() {
                $('#content .main').find('.vid-txt-box, .weather').removeClass('active');
            }, 1500);
        } else {
            // this.data().video.play();
            $('#content .main').find('.vid-txt-box, .weather').addClass('active');
        }
    },
    stop: function() {
        this.data().video.pause();
        this.data().video.currentTime = 0;
    },
    end: function() {
        this.stop();
        this.data().video.style.display = 'none';
        $('#content .main').find('.vid-wrap').removeClass('active');
        $('#content .main').find('.vid-txt-box, .weather').addClass('active');
    },
    init: function() {
        this.play();
    }
}