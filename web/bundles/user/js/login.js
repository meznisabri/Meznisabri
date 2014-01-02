var glow = true;
var forgotPath = 'forgot.php';
var checkLoginPath = 'checklogin.php';

// ############################################################
// YOU DO NOT HAVE TO CHANGE ANYTHING BELOW THIS LINE
// ############################################################

// If the subtle glow bothers you, or slows down
// your computer at all, change this to false.

function focusInput() {
	// Focus on the email input, password input, or password input with the caret at the end
	setTimeout(function() {
		if ($('#login-email').val() == '')
			$('#login-email').focus();
		else if ($('#login-password').val() == '')
			$('#login-password').focus();
		else
			$('#login-password').focus()[0].selectionStart = 999;
	}, 100);
}

function initForgotPassword() {

	var passwordSent = function(email, animate) {
		var name = email.substring(0, email.indexOf('@'));
		var domain = email.substring(email.indexOf('@') + 1);

		showInfo($('#form-login')[0], 'Your password has been sent to ' + name + '@<a href="http://' + domain + '">' + domain + '</a>.', !animate);
	}

	var showForgotForm = function(onComplete) {
		$('#login').animate({
			'top': '5px',
			'opacity': 0
		}, 200, function() {
			$(this).css('display', 'none');

			$('#forgot')
				.css({
					'display': 'block',
					'opacity': 0
				}).animate({
					'top': '0px',
					'opacity': 1
				}, 300);

			if (onComplete) onComplete();
		});
	};

	var showLoginForm = function(onComplete) {
		$('#forgot').animate({
			'top': '-5px',
			'opacity': 0
		}, 200, function() {
			$(this).css('display', 'none');
			$('#login')
				.css('display', 'block')
				.animate({
					'top': '0px',
					'opacity': 1
				}, 300);

			if (onComplete) onComplete();

		});

	}

	// Show the forgot form on link click
	$('#forgot-link').click(function() {
		var email = $('#login-email').val();
		spin('#form-login');
		
		ajax(forgotPath, function(json) {
			unspin('#form-login');

			if (json.success || json.sendFailed) {

				if (json.success)
					passwordSent(email, true);

				if (json.sendFailed)
					showInfo($('#form-login')[0], 'Your server does not support PHP\'s mail() function. Delete settings.txt in the data folder to reset your password.');

				clearError('#login');

				// Remove the link
				if (json.success)
					$('#forgot-link').animate({
						'opacity': 0
					}, 500, function() { $(this).remove(); });

				$('#login-password').focus();		
			} else {

				// Preset the email field to their email from the login form
				if ($('#login-email').val())
					$('#forgot-email').val($('#login-email').val()).removeClass('before-focus');

				showForgotForm(function() {
					// Only if no initFocus()
					$('#forgot-email').focus();

				});
			}

		}, {
			'email': email
		});
		return false;
	});

	// Submit form on enter
	$('#forgot-email').keypress(function(e) {
		var key = window.event ? e.keyCode : e.which; 
		if (key == 13 || key == 3) {
			$('#forgot-send').click();
			$(this).blur();
			return false;
		}

	});

	// Show the login form
	$('#forgot-cancel').click(function() {
		showLoginForm(function() {
			if ($('#login-email').val() == '')
				$('#login-email').focus();
			else
				$('#login-password').focus().select();
		});

		return false;
	});

	// Send the email
	$('#forgot-send').click(function() {
		var email = $('#forgot-email').val();
		spin('#form-forgot');
		clearftips('#form-forgot');
		
		ajax(forgotPath, function(json) {
			unspin('#form-forgot');

			if (json.success || json.sendFailed) {

				// Create the "Password Sent" box
				if (json.success)
					passwordSent(email, false);

				if (json.sendFailed)
					showInfo($('#form-login')[0], 'Your server does not support PHP\'s mail() function. Delete settings.txt in the data folder to reset your password.', true);

				// Remove the link
				$('#forgot-link').remove();
				clearError('#form-forgot');

				showLoginForm(function() {
					clearftip('#login-email');
					$('#login-email').val(email);
					$('#login-password').focus().select();
				});
		
			} else {

				// shakeForm('#form-forgot');
				showError('#form-forgot');
				ftip('#forgot-email', json.error);
				$('#forgot-email').focus().select();
			}

			$('login-password').focus();
		}, {
			'email': email
		});
		return false;
	});
}

function initLoginCheck() {
	$('#login-login').click(function() {
		$('#form-login').submit();
		return false;
	});

	$('#form-login').submit(function() {
		var email = $('#login-email').val();
		var password = $('#login-password').val();

		spin('#form-login');
		clearftips('#form-login');
		
		ajax(checkLoginPath, function(json) {
			unspin('#form-login');


			if (json.success){
				clearError('#form-login');

				$('#form-login').unbind('submit').submit();
			} else {
				var first;

				for (input in json.error) {
					first = first ? first : input;
					ftip('#login-' + input, json.error[input]);
				}
				$('#login-' + first).focus().select();

				showError('#form-login');
			}

		}, {
			'email': email,
			'password': password
		});
		return false;
	});
}


$(function() {
	initForms();
	initGlowContainers();
	initFormTips();
});

function initForms() {
	// Ignore YShout
	$('fieldset').each(function() {
		this.errors = 0;
	});

//	ERROR: Clicking in other inputs still focuses the first input. Some event bubbling thing.

//	$('fieldset').click(function(e) {
//		$(this).find('input:first').focus();
//	});

}

function initGlowContainers(selector) {
	selector = selector || '.glow-container';

	$(selector).each(function() {

		// Create the HTML
		$(this).html('<div class="mask mask-top"></div><div class="mask mask-middle"></div><div class="mask mask-bottom"></div><div class="content content-top"></div><div class="content content-middle"></div><div class="content content-bottom"></div><img class="content content-gradient" src="lib/img/form/content-gradient.png" /><div class="inner">' + this.innerHTML + '</div><div style="background-position: 0px 0px;" class="map"></div><div style="display: none;" class="gmap"></div><div style="display: none;" class="hmap"></div>');

		var self = this;
		var anyHidden;

		var fixDimensions = function() {

			// Show hidden ancestors
			var wereHidden = [];

			$(self).parents().each(function() {
				if ($(this).css('display') == 'none') {
					$(this).css('display', 'block');
					wereHidden.push(this);
				}
			});

			// Get the dimensions of needed things
			var maskGlowOffset = 16;
			var innerHeight = $('.inner', self).height();
			var topMaskHeight = $('.mask-top', self).height();
			var bottomMaskHeight = $('.mask-bottom', self).height();
			var topContentHeight = $('.content-top', self).height();
			var bottomContentHeight = $('.content-bottom', self).height();
			// d('innerHeight', innerHeight);
			// d('topMaskHeight', topMaskHeight);
			// d('bottomMaskHeight', bottomMaskHeight);

			$(self).height(innerHeight + topMaskHeight + bottomMaskHeight);
			$('.mask-middle', self).css({
				'height': innerHeight,
				'top': topMaskHeight
			});

			$('.content-top', self).css({
				'top': topMaskHeight - maskGlowOffset
			});

			$('.content-middle', self).css({
				'height': $(self).height() - topMaskHeight + maskGlowOffset*2 - bottomMaskHeight - topContentHeight - bottomContentHeight,
				'top': topMaskHeight - maskGlowOffset + topContentHeight
			});

			$('.inner', self).css({
				'top': topMaskHeight - maskGlowOffset

			})

			$('.content-gradient', self).css({
				'height': $(self).height() - topMaskHeight - bottomMaskHeight,
				'top': topMaskHeight - maskGlowOffset
			});

			anyHidden = (wereHidden.length > 0);

			// Re-hide hidden ancestors
			while (wereHidden.length > 0)
				$(wereHidden.pop()).css('display', 'none');
		};

		fixDimensions();

		// !!!
		// Make sure this is a high enough pause
		if (!anyHidden) setTimeout(fixDimensions, 500);
		if (!anyHidden) setTimeout(fixDimensions, 1000);
		if (!anyHidden) setTimeout(fixDimensions, 1500);

		resetBackground(this);


		var self = this;

		// Attach the colorizing functions
		$('input, select, textarea', this).focus(function() {
			//if (self.grayTimer)
			//	clearTimeout(self.grayTimer);

			fadeToColor(self);
		}).blur(function() {
			//self.grayTimer = setTimeout(function() {
				fadeToGray(self);
			//}, 100);
		})


	});

	$('.emap', selector).css({ 'display': 'block', 'opacity': 0 });
	$('.gmap', selector).css({ 'display': 'block', 'opacity': 1 });
}

function startGlow(selector) {
	if (!selector) return;

	// d('In startGlow');
	if ($('.map', selector).is(':animated')) return;

	// d('Starting animation');
	if (glow) $('.map', selector).animate({ backgroundPosition: '0px 0px' }, 5000 * 90, 'linear');
}

function stopGlow(selector) {
	if (!selector) return;

	$('.map', selector).stop();

}

function resetBackground(selector) {
	$('.map', selector).css({ backgroundPosition: (Math.floor(Math.random() * 2500) + 50000) + 'px 0' });
//	$('.map', selector).css({ backgroundPosition: '900000px 0' });
}

function fadeToGray(el) {
	// d('Fading to gray.');
	$('.gmap', (el)).stop().animate({
		'opacity': 1
	}, 400);

	el.bgTimer = setTimeout(function() {
		resetBackground(el);
	}, 500);

	stopGlow(el);
}

function fadeToColor(el) {
	clearTimeout(el.bgTimer);

	// d('Fading to color.');

	$(' .gmap', el).stop().animate({
		'opacity': 0
	}, 200);

	startGlow(el);
}

function shakeForm(selector) {
	$(selector + ' .inputs')
		.animate({ left: -5 }, 50) 
		.animate({ left: 5 }, 100)
		.animate({ left: -5 }, 100)
		.animate({ left: 5 }, 100)
		.animate({ left: 0 }, 50);
}

function shakeInput(selector) {
	$(selector)
		.animate({ marginLeft: -3 }, 50) 
		.animate({ marginLeft: 3 }, 100)
		.animate({ marginLeft: -3 }, 100)
		.animate({ marginLeft: 3 }, 100)
		.animate({ marginLeft: 0 }, 50)
		.focus().select();
}

function showError(selector) {
	$('.map', selector).addClass('emap');
}

function clearError(selector) {
/*
	input .haserror = true onError
	selector, inputs .each (if has error then do not remove .)
*/
	var hasError = false;

	$('input, select, textarea', selector).each(function() {
		if (this.error) hasError = true;
	});

	if (!hasError)
		$('.map', selector).removeClass('emap');
}

function initFocus() {
	$('.before-focus').focus(function() {
		if ($(this).hasClass('before-focus'))
			$(this).removeClass('before-focus').val('');
		$(this).unbind('focus', initFocus);
	});
}

function showInfo(form, message, noAnim) {
	if ($('#sent-' + form.id).length) return;

	$(form).before('<div id="info-' + form.id + '" class="info">' + message + '</div>');
	initCorners('#info-' + form.id);

	if (noAnim)
		return;

	$('#info-' + form.id).css({
		'position': 'absolute',
		'top': '-15px',
		'opacity': 0
	}).animate({
		'opacity': 1,
		'top': 0
	}, 500);


	$(form).animate({
		'top': $('#info-' + form.id)[0].clientHeight + 15
	}, 500);
}

function spin(selector) {
	$(selector + ' .spinny')
		.css({ 
			'display': 'block',
			'opacity': 0
		})
		.stop()
		.animate({
			'opacity': 1
		}, 300);
}

function unspin(selector) {
	$(selector + ' .spinny').stop().animate({
		'opacity': 0
	}, 300);
}

/* Tooltips */

function initFormTips() {
	$('input, select, textarea').wrap('<div class="input-container"></div>');
}

function ftip(input, message) {
	var input = input.jquery ? input[0] : input;
	var tip;
	var html = '<span class="tip-start"></span><span class="tip-middle">' + message + '</span><span class="tip-end"></span>';

	if ((tip = $(input).siblings('.tip')).length == 1) {
		tip.html(html);
		return;
	}

	$('<span class="tip" input="' + input.id + '">' + html + '</span>').insertAfter(input);

	(tip = $(input).siblings('.tip'))
		.css({
			'display': 'block',
			'opacity': 0,
			'right': -tip.width()
		})
		.animate({
			'right': -tip.width() - 20
		}, 400, 'easeOutBounce')
		.animate({
			'opacity': 1,
		}, {
			queue: false,
			duration: 200
		});

}

function clearftip(input) {
	$(input).siblings('.tip').remove();
}

function clearftips(selector) {
	$('.tip', selector).remove();
}
$(function() {
	 initHover();
	 
});

function initHover(selector, time) {


	selector = selector || '';
	if (!time) time = 300;

	$(selector)
		.each(function() {
			var html = $(this).html();

		})
		.hover(
			
		)
		.find('.hover').css('opacity', 0);
}
// Various functions for use on other pages, and
// Miscellaneous global effects, such as corners and glowy forms

$(function() {
	initDebug();

	$('body').addClass('js');
	initPreload();
	initCorners();
	fixNav();

	setupGlows();
	initLogoGlow();
//	setInterval(fixGlow, 1000);
});

function initDebug() {
	$('#debug').toggle(function() {
		$(this).animate({
			'width': '-=80%' ,
			opacity: .5
		}, 400);
	}, function() {
		$(this).animate({
			'width': '+=80%',
			'opacity': .85
		});
	});
}

function initLogoGlow() {
	$('h1 a')
		.find('.map').stop().end()
		.hover(function() {
		$('.gmap', this).stop().animate({
			'opacity': 0
		}, 750);

		$('.map', this).animate({
			backgroundPosition: '0px 0px',
		}, 60000 * 10, 'linear');

	}, function() {
		$('.map', this).stop();

		$('.gmap', this).stop().animate({
			'opacity': 1
		}, 1000);


	});
}

function setupGlows() {
	$('.glow').each(function() {
		$(this).append('<div class="map" style="background-position: 50000px 0;"></div><div class="gmap" ></div><div class="mask"></div>');
	});

	$('.glow .gmap').css({ 'opacity': 1 });

}

function initPreload() {
	$('body').append('<div id="preload"></div>');
}

function initCorners(selector) {
	selector = selector || '.corners';

	$(selector)
		.wrapInner('<div class="corner corner-tl"><div class="corner corner-bl"><div class="corner corner-tr"><div class="corner corner-br inner"></div></div></div></div>');
}

function fixNav() {
	$('#nav>li').addClass('nav-item');
	$('#nav>li>a').addClass('nav-item-link');
	$('#nav>li>ul>li').addClass('subnav-item');
	$('#nav>li>ul>li>a').addClass('subnav-item-link');
}

function ajax(url, callback, pars, html) {
	var json = function(parse) {
		var json = eval('(' + parse + ')');
		return json;
	}

	$.post(url, pars, function(parse) {
//		alert(parse);
d(parse);
		if (parse)
			if (html)
				callback(parse);
			else
				callback(json(parse));
		else
			callback();
	});
}

function d(title, str) {
	if (title) title = unescape(title);
	if (str) str = unescape(str);
//	title = Math.random();
	if (str) $('#debug').prepend('<p><b>' + title + ':</b> ' + str + '</p>');
	else if (title == '-') $('#debug').prepend('<p>------</p>');
	else if (title) $('#debug').prepend('<p>' + title + '</p>');
	else $('#debug').prepend('<br />');

}



/*
	Color animations
	Dimensions
	Easing
*/


/*
 * jQuery Color Animations
 * Copyright 2007 John Resig
 * Released under the MIT and GPL licenses.
 */

(function(jQuery){

	// We override the animation for all of these color styles
	jQuery.each(['backgroundColor', 'borderBottomColor', 'borderLeftColor', 'borderRightColor', 'borderTopColor', 'color', 'outlineColor'], function(i,attr){
		jQuery.fx.step[attr] = function(fx){
			if ( fx.state == 0 ) {
				fx.start = getColor( fx.elem, attr );
				fx.end = getRGB( fx.end );
			}

			fx.elem.style[attr] = "rgb(" + [
				Math.max(Math.min( parseInt((fx.pos * (fx.end[0] - fx.start[0])) + fx.start[0]), 255), 0),
				Math.max(Math.min( parseInt((fx.pos * (fx.end[1] - fx.start[1])) + fx.start[1]), 255), 0),
				Math.max(Math.min( parseInt((fx.pos * (fx.end[2] - fx.start[2])) + fx.start[2]), 255), 0)
			].join(",") + ")";
		}
	});

	// Color Conversion functions from highlightFade
	// By Blair Mitchelmore
	// http://jquery.offput.ca/highlightFade/

	// Parse strings looking for color tuples [255,255,255]
	function getRGB(color) {
		var result;

		// Check if we're already dealing with an array of colors
		if ( color && color.constructor == Array && color.length == 3 )
			return color;

		// Look for rgb(num,num,num)
		if (result = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color))
			return [parseInt(result[1]), parseInt(result[2]), parseInt(result[3])];

		// Look for rgb(num%,num%,num%)
		if (result = /rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(color))
			return [parseFloat(result[1])*2.55, parseFloat(result[2])*2.55, parseFloat(result[3])*2.55];

		// Look for #a0b1c2
		if (result = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(color))
			return [parseInt(result[1],16), parseInt(result[2],16), parseInt(result[3],16)];

		// Look for #fff
		if (result = /#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(color))
			return [parseInt(result[1]+result[1],16), parseInt(result[2]+result[2],16), parseInt(result[3]+result[3],16)];

		// Otherwise, we're most likely dealing with a named color
		return colors[jQuery.trim(color).toLowerCase()];
	}
	
	function getColor(elem, attr) {
		var color;

		do {
			color = jQuery.curCSS(elem, attr);

			// Keep going until we find an element that has color, or we hit the body
			if ( color != '' && color != 'transparent' || jQuery.nodeName(elem, "body") )
				break; 

			attr = "backgroundColor";
		} while ( elem = elem.parentNode );

		return getRGB(color);
	};
	
	// Some named colors to work with
	// From Interface by Stefan Petre
	// http://interface.eyecon.ro/

	var colors = {
		aqua:[0,255,255],
		azure:[240,255,255],
		beige:[245,245,220],
		black:[0,0,0],
		blue:[0,0,255],
		brown:[165,42,42],
		cyan:[0,255,255],
		darkblue:[0,0,139],
		darkcyan:[0,139,139],
		darkgrey:[169,169,169],
		darkgreen:[0,100,0],
		darkkhaki:[189,183,107],
		darkmagenta:[139,0,139],
		darkolivegreen:[85,107,47],
		darkorange:[255,140,0],
		darkorchid:[153,50,204],
		darkred:[139,0,0],
		darksalmon:[233,150,122],
		darkviolet:[148,0,211],
		fuchsia:[255,0,255],
		gold:[255,215,0],
		green:[0,128,0],
		indigo:[75,0,130],
		khaki:[240,230,140],
		lightblue:[173,216,230],
		lightcyan:[224,255,255],
		lightgreen:[144,238,144],
		lightgrey:[211,211,211],
		lightpink:[255,182,193],
		lightyellow:[255,255,224],
		lime:[0,255,0],
		magenta:[255,0,255],
		maroon:[128,0,0],
		navy:[0,0,128],
		olive:[128,128,0],
		orange:[255,165,0],
		pink:[255,192,203],
		purple:[128,0,128],
		violet:[128,0,128],
		red:[255,0,0],
		silver:[192,192,192],
		white:[255,255,255],
		yellow:[255,255,0]
	};
	
})(jQuery);



/* Copyright (c) 2007 Paul Bakaus (paul.bakaus@googlemail.com) and Brandon Aaron (brandon.aaron@gmail.com || http://brandonaaron.net)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * $LastChangedDate: 2007-12-20 08:46:55 -0600 (Thu, 20 Dec 2007) $
 * $Rev: 4259 $
 *
 * Version: 1.2
 *
 * Requires: jQuery 1.2+
 */

(function($){
	
$.dimensions = {
	version: '1.2'
};

// Create innerHeight, innerWidth, outerHeight and outerWidth methods
$.each( [ 'Height', 'Width' ], function(i, name){
	
	// innerHeight and innerWidth
	$.fn[ 'inner' + name ] = function() {
		if (!this[0]) return;
		
		var torl = name == 'Height' ? 'Top'    : 'Left',  // top or left
		    borr = name == 'Height' ? 'Bottom' : 'Right'; // bottom or right
		
		return this.is(':visible') ? this[0]['client' + name] : num( this, name.toLowerCase() ) + num(this, 'padding' + torl) + num(this, 'padding' + borr);
	};
	
	// outerHeight and outerWidth
	$.fn[ 'outer' + name ] = function(options) {
		if (!this[0]) return;
		
		var torl = name == 'Height' ? 'Top'    : 'Left',  // top or left
		    borr = name == 'Height' ? 'Bottom' : 'Right'; // bottom or right
		
		options = $.extend({ margin: false }, options || {});
		
		var val = this.is(':visible') ? 
				this[0]['offset' + name] : 
				num( this, name.toLowerCase() )
					+ num(this, 'border' + torl + 'Width') + num(this, 'border' + borr + 'Width')
					+ num(this, 'padding' + torl) + num(this, 'padding' + borr);
		
		return val + (options.margin ? (num(this, 'margin' + torl) + num(this, 'margin' + borr)) : 0);
	};
});

// Create scrollLeft and scrollTop methods
$.each( ['Left', 'Top'], function(i, name) {
	$.fn[ 'scroll' + name ] = function(val) {
		if (!this[0]) return;
		
		return val != undefined ?
		
			// Set the scroll offset
			this.each(function() {
				this == window || this == document ?
					window.scrollTo( 
						name == 'Left' ? val : $(window)[ 'scrollLeft' ](),
						name == 'Top'  ? val : $(window)[ 'scrollTop'  ]()
					) :
					this[ 'scroll' + name ] = val;
			}) :
			
			// Return the scroll offset
			this[0] == window || this[0] == document ?
				self[ (name == 'Left' ? 'pageXOffset' : 'pageYOffset') ] ||
					$.boxModel && document.documentElement[ 'scroll' + name ] ||
					document.body[ 'scroll' + name ] :
				this[0][ 'scroll' + name ];
	};
});

$.fn.extend({
	position: function() {
		var left = 0, top = 0, elem = this[0], offset, parentOffset, offsetParent, results;
		
		if (elem) {
			// Get *real* offsetParent
			offsetParent = this.offsetParent();
			
			// Get correct offsets
			offset       = this.offset();
			parentOffset = offsetParent.offset();
			
			// Subtract element margins
			offset.top  -= num(elem, 'marginTop');
			offset.left -= num(elem, 'marginLeft');
			
			// Add offsetParent borders
			parentOffset.top  += num(offsetParent, 'borderTopWidth');
			parentOffset.left += num(offsetParent, 'borderLeftWidth');
			
			// Subtract the two offsets
			results = {
				top:  offset.top  - parentOffset.top,
				left: offset.left - parentOffset.left
			};
		}
		
		return results;
	},
	
	offsetParent: function() {
		var offsetParent = this[0].offsetParent;
		while ( offsetParent && (!/^body|html$/i.test(offsetParent.tagName) && $.css(offsetParent, 'position') == 'static') )
			offsetParent = offsetParent.offsetParent;
		return $(offsetParent);
	}
});

function num(el, prop) {
	return parseInt($.curCSS(el.jquery?el[0]:el,prop,true))||0;
};

})(jQuery);


/*
 * jQuery EasIng v1.1.2 - http://gsgd.co.uk/sandbox/jquery.easIng.php
 *
 * Uses the built In easIng capabilities added In jQuery 1.1
 * to offer multiple easIng options
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */

// t: current time, b: begInnIng value, c: change In value, d: duration

jQuery.extend( jQuery.easing,
{
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

$(function() {
	focusInput();
	initForgotPassword();
	initLoginCheck();
	initFocus();
});