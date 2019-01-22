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
				height : 312,
			}, 400, "easeOutCubic");
			jQuery(this).addClass("on");
		}).focusin(function() {
			jQuery(this).mouseenter();
		})

		jQuery(this).mouseleave(function() {
			jQuery(this).removeClass("on");
			jQuery(".gnbDiv").stop().animate({
				height : 83,
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
})
function activeSub() {
	jQuery(".gnb ul").children("li").eq(oneNum).addClass("on");
}

/*-----------------
 * visual
 * --------------*/
var vInterval, vDuration = 10000;
var vCurNum, vMaxNum;
$(function() {
	vMaxNum = jQuery(".mainVisual>.visualBg").size() - 1;
	vCurNum = 0;
	if (vMaxNum != 0) {
		vInterval = setInterval("visual()", vDuration);
	} else {
		jQuery(".controller").css("display", "none");
		jQuery(".controller2").css("display", "none");
	}
	jQuery(".mainVisual>.controller>.btns>a").each(function(q) {
		jQuery(this).hover(function() {
			clearInterval(vInterval);
			jQuery(this).find("img").attr("src", jQuery(this).find("img").attr("src").replace(".png", ".png"));
		}, function() {
			clearInterval(vInterval);
			vInterval = setInterval("visual()", vDuration);
			jQuery(this).find("img").attr("src", jQuery(this).find("img").attr("src").replace(".png", ".png"));
		}).click(function() {
			if (q) {
				jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src").replace("_up.png", ".png"));
				jQuery(".visualBg").eq(vCurNum).stop().animate({
					left : "-100%"
				}, 500);
				vCurNum++;
				if (vCurNum > vMaxNum)
					vCurNum = 0;
				jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src").replace(".png", "_up.png"));
				jQuery(".visualBg").eq(vCurNum).stop().animate({
					left : "100%"
				}, 0).stop().animate({
					left : "0%"
				}, 500);
			} else {
				jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src").replace("_up.png", ".png"));
				jQuery(".visualBg").eq(vCurNum).stop().animate({
					left : "100%"
				}, 500);
				vCurNum--;
				if (vCurNum < 0)
					vCurNum = vMaxNum;
				jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src").replace(".png", "_up.png"));
				jQuery(".visualBg").eq(vCurNum).stop().animate({
					left : "-100%"
				}, 0).stop().animate({
					left : "0%"
				}, 500);
			}
		})
	})

	jQuery(".mainVisual>.controller2 a").each(function(q) {
		jQuery(this).mouseover(function() {
			if (q != vCurNum) {
				jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src").replace("_up.png", ".png"));
				jQuery(".visualBg").eq(vCurNum).stop().animate({
					left : "-100%"
				}, 500);
				vCurNum = q;
				jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src").replace(".png", "_up.png"));
				jQuery(".visualBg").eq(vCurNum).stop().animate({
					left : "100%"
				}, 0).stop().animate({
					left : "0%"
				}, 500);
			}
		}).hover(function() {
			clearInterval(vInterval);
		}, function() {
			clearInterval(vInterval);
			vInterval = setInterval("visual()", vDuration);
		})
	})
})
function visual() {
	/*
	jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src").replace("_up.png", ".png"));
	jQuery(".visualBg").eq(vCurNum).stop().animate({
		left : "-100%"
	}, 500);
	vCurNum++;
	if (vCurNum > vMaxNum)
		vCurNum = 0;
	jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".mainVisual>.controller2 a").eq(vCurNum).find("img").attr("src").replace(".png", "_up.png"));
	jQuery(".visualBg").eq(vCurNum).stop().animate({
		left : "100%"
	}, 0).stop().animate({
		left : "0%"
	}, 500);
	*/
}


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

/*-----------------
 * Popup Layer
 * --------------*/
function setCookie( name, value, expirehours ) {
 var todayDate = new Date();
 todayDate.setHours( todayDate.getHours() + expirehours );
 document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function closeWin() {
 if(document.getElementById("pop_today").checked){
  setCookie( "ncookie", "done" , 24 );
 }
 document.getElementById('layer_pop').style.display = "none";
}

/*-----------------
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