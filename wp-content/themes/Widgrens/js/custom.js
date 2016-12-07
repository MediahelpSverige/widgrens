
	$(document).ready(function() {
         $('.banner').owlCarousel({
            loop:true,
             items:1,
            margin:0,
            items:1,
            dots:true
        });
        //bootstrap Tooltip
		$('[data-toggle="tooltip"]').tooltip();
		
	});
	
	//header shrink
	$(function(){
		var shrinkHeader = 2;
		$(window).scroll(function() {
			var scroll = getCurrentScroll();
			if ( scroll >= shrinkHeader ) {
				$('.shrinkHeader').addClass('shrinked');
			} else {
				$('.shrinkHeader').removeClass('shrinked');
			}
		});
		function getCurrentScroll() {
		    return window.pageYOffset || document.documentElement.scrollTop;
	    }
	});
		
	 //windowHeight
	function windowHeight() {
		var wh = $(window).height();
		$('.winHeight').css({height:wh})
	}
	
	// equal height of 2 section
	function equalHeight() {
		var highestCol = Math.max($('.class1').height(),$('.class2').height());
		$('.class1, .class2').css({minHeight: highestCol});
	}
	
	// same height multiple block
	function sameHeight() {
		
	}
	// Footer Fixed
	function footerarea_css() {
		var window_height_for_footer = parseInt($(window).height());
		var document_height_for_footer = parseInt($('html body').outerHeight(true));
		if(document_height_for_footer < window_height_for_footer) {
			$('.footer').css('position', 'fixed').css('display', 'block').css('bottom', '0').css('left', '0').css('right', '0');
		} else {
			$('.footer').css('position', 'relative').css('display', 'block');
		}
	}
	// custom function init
	$(window).resize(function () {
		footerarea_css();
		windowHeight();
		equalHeight();
		sameHeight();
	});
	$(document).ready(function() {
		footerarea_css();
		windowHeight();
		equalHeight();
		sameHeight()
	});
	
$(function(){
	    $('#menu-item-161').attr("data-toggle","modal");
		$('#menu-item-161').attr("data-target","#myModal");
		
	});