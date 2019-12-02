/*-----------------
 * gnb
 * --------------*/

var oneNum = -1;
var twoNum = -1;
jQuery(document).ready(function() {
	//gnb
	if (oneNum != -1)
		activeSub();
	jQuery(".gnb ul").children("li").each(function(q) {
		jQuery(this).mouseenter(function() {
			if (oneNum != -1) {
				jQuery(".gnb ul").children("li").eq(oneNum).removeClass("on");
			}
			jQuery(".gnbDiv").stop().animate({
				height : 235
			}, 400, "easeOutCubic");
			jQuery(this).addClass("on");
		}).focusin(function() {
			jQuery(this).mouseenter();
		})

		jQuery(this).mouseleave(function() {
			jQuery(this).removeClass("on");
			jQuery(".gnbDiv").stop().animate({
				height : 70
			}, 400, "easeOutCubic");

			if (oneNum != -1) {
				activeSub()
			}
		}).focusout(function() {
			jQuery(this).mouseleave();
		})

		jQuery(this).find(".twoDep").find("a").each(function() {
			jQuery(this).mouseover(function() {
			})

			jQuery(this).mouseout(function() {
			})
		})
	})
    
    
    // headerFunc();
    scrollFunc();
})
function activeSub() {
	jQuery(".gnb ul").children("li").eq(oneNum).addClass("on");
}

//header scroll function
function headerFunc() {
	var hd	= $(".header"),
		hdTop  = hd.height();
    
	$(window).scroll(function() {
		var scr = $(window).scrollTop();
		
        if ( scr <= hdTop ) {
            hd.removeClass('on');
        } else if ( scr > hdTop ) {
            hd.addClass('on');
        } 
	});
}

function scrollFunc () {
	var gnb	= $(".gnb"),
        header	= $(".header"),
        evtPop	= $('.event_pop'),
		btnTop	= $("#btnTop"),
		top		= $(".main").outerHeight(),
		gnbTop  = gnb.height(),
        windowWid = $(window).width();
    var winHt, mainRestH, mainTop;
    
	$(window).scroll(function() {
		var scr = $(window).scrollTop();
		// console.log(scr);
		// console.log(top); 
		// 상단 해더 고정 배경 클래스 추가
        //console.log(windowWid);
        
        //메인일때
        if( $('.Main').length ) {
            //console.log('vid');
            var winHt = $(window).height(),
                mainRestH = $('.goto_area').height()
                mainTop = $('.vid-wrap').height(),
                rWing = $('.rWing');
            var mainMg = 40, mrMg = 50, mrMgM = 15;

            //메인
            if ( scr <= (mainTop-(gnbTop+mrMg)) ) { 
                //console.log('off');
                gnb.removeClass('on');
                header.addClass('vid'); 
                rWing.removeClass('active');
            } else if ( scr > (mainTop-(gnbTop+mrMg)) ) {
                // console.log('header remove vid');
                gnb.addClass('on');
                header.removeClass('vid');
                rWing.addClass('active');
            } 
            
        }else {
            if ( scr <= gnbTop ) {
                gnb.removeClass('on');
            } else if ( scr > gnbTop ) {
                //console.log('on_non');
                gnb.addClass('on');
            } 
        }
        
		// top 버튼 display
		if ( scr > top ) {
			btnTop.fadeIn();
		} else {
			btnTop.fadeOut();
		}
	});
	btnTop.on('click', function() {
		$('html, body').stop().animate({scrollTop: '0'}, 500);
	});
}

/* ----------------------------------------------------------------
 visual_main
 -----------------------------------------------------------------*/
$(document).ready(function() {

	var time = 7;
	// time in seconds

	var $progressBar, $bar, $elem, isPause, tick, percentTime;

	//Init the carousel
	$("#owl-demo").owlCarousel({
		slideSpeed : 500,
		paginationSpeed : 500,
		singleItem : true,
		afterInit : progressBar,
		afterMove : moved,
		startDragging : pauseOnDragging
	});

	//Init progressBar where elem is $("#owl-demo")
	function progressBar(elem) {
		$elem = elem;
		//build progress bar elements
		buildProgressBar();
		//start counting
		start();
	}

	//create div#progressBar and div#bar then prepend to $("#owl-demo")
	function buildProgressBar() {
		$progressBar = $("<div>", {
			id : "progressBar"
		});
		$bar = $("<div>", {
			id : "bar"
		});
		$progressBar.append($bar).prependTo($elem);
	}

	function start() {
		//reset timer
		percentTime = 0;
		isPause = false;
		//run interval every 0.01 second
		tick = setInterval(interval, 10);
	};

	function interval() {
		if (isPause === false) {
			percentTime += 1 / time;
			$bar.css({
				width : percentTime + "%"
			});
			//if percentTime is equal or greater than 100
			if (percentTime >= 100) {
				//slide to next item
				$elem.trigger('owl.next')
			}
		}
	}

	//pause while dragging
	function pauseOnDragging() {
		isPause = true;
	}

	//moved callback
	function moved() {
		//clear interval
		clearTimeout(tick);
		//start again
		start();
	}

	//uncomment this to make pause on mouseover
	// $elem.on('mouseover',function(){
	//   isPause = true;
	// })
	// $elem.on('mouseout',function(){
	//   isPause = false;
	// })

});



/* ----------------------------------------------------------------
 left nav menu
 -----------------------------------------------------------------*/

$(document).ready(function() {
    var nav = $('nav#menu_ramada');
    
	nav.mmenu();
    
    /*nav.toggle(function(){
        var winH = $(window).height(); 
        var scr = $(window).scrollTop();
        nav.css({'display' : 'block', 'height' : winH+'px', 'top' : scr+'px'});

        $('html').css({'overflow': 'hidden', 'height': '100%'});
        nav.on('scroll touchmove mousewheel', function(event) { 
            event.preventDefault();     
            event.stopPropagation();     
            return false; 
        }); 
    }, function(){
        nav.css({'display' : 'none'});
        
        $('html').css({'overflow': 'auto'});
        nav.off('scroll touchmove mousewheel');
    });*/
    
});

/* ----------------------------------------------------------------
 left nav
 -----------------------------------------------------------------*/
$(document).ready(function() {
	//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked
	$("div.menu_head").click(function() {
		$(this).next("ul.menu_body").slideToggle(200).siblings("ul.menu_body").slideUp("slow");
	});

	$("ul.menu_body li h3").click(function() {
		$(this).next("ol.menu_body2").slideToggle(200).siblings("ol.menu_body2").slideUp("slow");
	});

});




/* ----------------------------------------------------------------
 tab
 -----------------------------------------------------------------*/

/* idTabs ~ Sean Catchpole - Version 2.2 - MIT/GPL */
(function() {
	var dep = {
		"jQuery" : "http://code.jquery.com/jquery-latest.min.js"
	};
	var init = function() {
		(function($) {
			$.fn.idTabs = function() {
				var s = {};
				for (var i = 0; i < arguments.length; ++i) {
					var a = arguments[i];
					switch(a.constructor) {
					case Object:
						$.extend(s, a);
						break;
					case Boolean:
						s.change = a;
						break;
					case Number:
						s.start = a;
						break;
					case Function:
						s.click = a;
						break;
					case String:
						if (a.charAt(0) == '.')
							s.selected = a;
						else if (a.charAt(0) == '!')
							s.event = a;
						else
							s.start = a;
						break;
					}
				}
				if ( typeof s['return'] == "function")
					s.change = s['return'];
				return this.each(function() {
					$.idTabs(this, s);
				});
			}
			$.idTabs = function(tabs, options) {
				var meta = ($.metadata) ? $(tabs).metadata() : {};
				var s = $.extend({}, $.idTabs.settings, meta, options);
				if (s.selected.charAt(0) == '.')
					s.selected = s.selected.substr(1);
				if (s.event.charAt(0) == '!')
					s.event = s.event.substr(1);
				if (s.start == null)
					s.start = -1;
				var showId = function() {
					if ($(this).is('.' + s.selected))
						return s.change;
					var id = "#" + this.href.split('#')[1];
					var aList = [];
					var idList = [];
					$("a", tabs).each(function() {
						if (this.href.match(/#/)) {
							aList.push(this);
							idList.push("#" + this.href.split('#')[1]);
						}
					});
					if (s.click && !s.click.apply(this, [id, idList, tabs, s]))
						return s.change;
					for (i in aList)
					$(aList[i]).removeClass(s.selected);
					for (i in idList)
					$(idList[i]).hide();
					$(this).addClass(s.selected);
					$(id).show();
					return s.change;
				}
				var list = $("a[href*='#']", tabs).unbind(s.event, showId).bind(s.event, showId);
				list.each(function() {
					$("#" + this.href.split('#')[1]).hide();
				});
				var test = false;
				if (( test = list.filter('.' + s.selected)).length)
					;
				else if ( typeof s.start == "number" && ( test = list.eq(s.start)).length)
					;
				else if ( typeof s.start == "string" && ( test = list.filter("[href*='#" + s.start + "']")).length)
					;
				if (test) {
					test.removeClass(s.selected);
					test.trigger(s.event);
				}
				return s;
			}
			$.idTabs.settings = {
				start : 0,
				change : false,
				click : null,
				selected : ".selected",
				event : "!click"
			};
			$.idTabs.version = "2.2";
			$(function() {
				$(".idTabs").idTabs();
			});
		})(jQuery);
	}
	var check = function(o, s) {
		s = s.split('.');
		while (o && s.length)
		o = o[s.shift()];
		return o;
	}
	var head = document.getElementsByTagName("head")[0];
	var add = function(url) {
		var s = document.createElement("script");
		s.type = "text/javascript";
		s.src = url;
		head.appendChild(s);
	}
	var s = document.getElementsByTagName('script');
	var src = s[s.length - 1].src;
	var ok = true;
	for (d in dep) {
		if (check(this, d))
			continue;
		ok = false;
		add(dep[d]);
	}
	if (ok)
		return init();
	add(src);
})();

$(document).ready(function() {
	$("#tabBox ul").idTabs();
});

/*------
-----------
 * 단체예약 Q&A
 * --------------*/
$(function () {
    if( $('body').hasClass('Group') ){
	   toggleOn("#qna-list > li", "sib");
    }
});

function toggleOn(itm, type) {
	if (type == "sib") {
		$(itm).on('click', function () {
			var idx = $(this).index();
			
			$(this).toggleClass('on').siblings().removeClass('on');
			//console.log('on');
		});
	} else {
		$(itm).on('click', function () {
			var idx = $(this).index();
			$(this).toggleClass('on');
		});
	}
}