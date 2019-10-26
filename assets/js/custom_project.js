jQuery(document).ready(function() {


	'use strict';
	

	/* Sticky Header */
	jQuery(window).scroll(function() {
		if (jQuery(window).scrollTop() > 130) {
			jQuery('.main_header').addClass('sticky');
			jQuery('.main_header').removeClass('non_sticky');
		}
		else {
			jQuery('.main_header').removeClass('sticky');
			jQuery('.main_header').addClass('non_sticky');
		}
	});
	
	//  scroll-top header reagain size

	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $(".main_header").outerHeight();

	$(window).scroll(function(event) {
		didScroll = true;
	});

	setInterval(function() {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 50);

	function hasScrolled() {
		var st = $(this).scrollTop();

		// Make sure they scroll more than delta
		if (Math.abs(lastScrollTop - st) <= delta) return;

		// If they scrolled down and are past the navbar, add class .nav-up.
		// This is necessary so you never see what is "behind" the navbar.
		if (st > lastScrollTop && st > navbarHeight) {
			// Scroll Down
			$(".main_header")
				.removeClass("nav_down")
				.addClass("nav_up");
		} else {
			// Scroll Up
			if (st + $(window).height() < $(document).height()) {
				$(".main_header")
					.removeClass("nav_up")
					.addClass("nav_down");
			}
		}
		lastScrollTop = st;
	}

	/* Active Link */
	var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); 
        $('.nav_listing li a ,#os_mobile_menu ul li a').each(function(){
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).parent().addClass('active_nav');
         }
    });	
	
	
	/************************************ OnScroll Animations *************************************************/
	
	function onScrollInit( items, trigger ) {
	
	  items.each( function() {
		var osElement = $(this),
			osAnimationClass = osElement.attr('data-animation'),
			osAnimationDelay = osElement.attr('data-animation-delay');
		  
			osElement.css({
			  '-webkit-animation-delay':  osAnimationDelay,
			  '-moz-animation-delay':     osAnimationDelay,
			  'animation-delay':          osAnimationDelay
			});
	
			var osTrigger = ( trigger ) ? trigger : osElement;        
	
			osTrigger.waypoint(function() {
			  osElement.addClass('animated').addClass(osAnimationClass);
			  },{
				  triggerOnce: true,
				  offset: '70%'
			});
	  });
	}
	
	/* Trigger OnScroll */
	/* Hompage */
	onScrollInit( $('.notices , .quick , .our_blog , .map_section '));

	/* Close sumbenu on click of body */
	$("body").hover(function() {
		if($('.main_nav_row').is(":visible")){	
			$('.main_nav_row').slideToggle();
		}
	});
	
	$(".sticky_menubtn , .has_sub i , .go-back").click(function(e)
	{
		e.stopPropagation();
		return;
	});
	
	
	
		
});