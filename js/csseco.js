/**
  * @package fxoroVone
  * js/csseco.js
  */
jQuery(document).ready(function($){
	
	// ==================
	// Carousel next and prev thumb preview
	// ==================
	var carouselClass = '.csseco_carousel';
	$(document).on('click', carouselClass, function(){
		var id = $("#"+$(this).attr("id"));
		$(id).on('slid.bs.carousel', function(){
			 (id);
		});
	});
	$(document).on('mouseenter', carouselClass, function(){
		var id = $("#"+$(this).attr("id"));
		csseco_get_bs_thumbs(id);
	});
	function csseco_get_bs_thumbs( id ) {
		var prevThumb = $(id).find('.carousel-item.active').find('.prev-thumb-preview').data('image');
		$(id).find('.carousel-control.left').find('.preview-thumb').css('background-image', 'url('+prevThumb+')');
		var nextThumb = $(id).find('.carousel-item.active').find('.next-thumb-preview').data('image');
		$(id).find('.carousel-control.right').find('.preview-thumb').css('background-image', 'url('+nextThumb+')');
	}

	// ==================
	// Add bootstrap classes on different elements in the DOM
	// ==================
	$('img').addClass('img-fluid'); // add img-responsive(bootstrap) to all images
	$('select').addClass('form-control'); // add form-control(bootstrap) class on all select elements on the site
	$('table').addClass('table').wrap('<div class="table-responsive"></div>'); // add table(bootstrap) class on all table elements on the site
	
	
	// ==================
	// Mobile menu
	// ==================
	var menuBtnOpenClass = '.burger.open';
	var menuBtnCloseClass = '.burger.close';
	
	$(document).on('click', menuBtnOpenClass, function(){
		$('#bmenu').addClass('open');
		$('body').css('overflow', 'hidden');
		$(this).addClass('open_menu');
	});
	
	$(document).on('click', menuBtnCloseClass, function(){
		$('#bmenu').css('transition', 'transform 500ms ease-in').removeClass('open');
		$('body').css('overflow', 'auto');
		$(menuBtnOpenClass).removeClass('open_menu');
	});
	
	$('.menu-item-has-children>a').after('<div class="menu_caret"><i class="fas fa-caret-down"></i></div>');
	
	if (screen.width < 992) {
		
		$('.menu_caret').on('click', function () { // click

			if ($(this).parent().hasClass('menu_open')) { // inchis

				$(this).parent().removeClass('menu_open');
				$(this).siblings('.sub-menu').slideUp(400, 'linear').find('.sub-menu').slideUp(400, 'linear');
				$(this).parent('.menu-item-has-children').siblings().removeClass('menu_open');
				$(this).parent('.menu-item-has-children').find('.menu-item-has-children').removeClass('menu_open');
				$(this).parent('.menu-item-has-children').siblings().find('.sub-menu').slideUp(400, 'linear');

			} else { // deschis

				$(this).parent().addClass('menu_open');
				$(this).siblings('.sub-menu').slideDown(400, 'linear');
				$(this).parent('.menu-item-has-children').siblings().removeClass('menu_open');
				$(this).parent('.menu-item-has-children').siblings().find('.menu-item-has-children').removeClass('menu_open');
				$(this).parent('.menu-item-has-children').siblings().find('.sub-menu').slideUp(400, 'linear');

			}

		});

	}
	$('.subsection_ttl > a').on('click', function(e){
		e.preventDefault();
	});
	
	// ==================
	// Fixed Menu
	// ==================
	$("header#header.site_header").before($("header#header.site_header").clone().addClass("animateIt"));
    $(window).on("scroll", function () {
        $("header#header.site_header.animateIt").toggleClass("down", ($(window).scrollTop() > 170));
    });
	
	// ==================
	// Owl Carousel
	// ==================
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) { // owl carousel in bootstrap tabs
    	$($(e.target).attr('href')).find('.owl-carousel').owlCarousel('invalidate', 'width').owlCarousel('update');
	});
	$('.owl-carousel').owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		dots:false,
		responsive:{
			0:{ items:1 },
			576:{ items:2 },
			768:{ items:3 },
			992:{ items:4 }
		}
	});
	
	// ==================
	// Map (front page)
	// ==================
	if($('.imgmap').visible(true)) {
		$('.imgmap.pins').addClass('top');
		setTimeout(function(){
			$('.imgmap.pins').addClass('show');
		}, 800);
	}
	$(window).scroll(function() {
		if($('.imgmap').visible(true)) {
			$('.imgmap.pins').addClass('top');
			setTimeout(function(){
				$('.imgmap.pins').addClass('show');
			}, 800);
		}
	});
	
	// Resize and highlight
	$("map").imageMapResize();
	var resizeEvt;
	$('.map').maphilight({
		fill: true,
		fillColor: '000000',
		fillOpacity: 0.4,
		stroke: false,
		strokeColor: 'ff0000',
		strokeOpacity: 1,
		strokeWidth: 1,
		fade: true,
		alwaysOn: false,
		neverOn: false,
		groupBy: false,
		wrapClass: true,
		shadow: false,
		shadowX: 0,
		shadowY: 0,
		shadowRadius: 6,
		shadowColor: '000000',
		shadowOpacity: 0.8,
		shadowPosition: 'outside',
		shadowFrom: false
	});
	$('.map').rwdImageMaps();
	 $(window).on('resize.usemaps', function(){
        clearTimeout(resizeEvt);
        resizeEvt = setTimeout(function(){
            $('.map').maphilight();
        }, 200);
    });
	
	// ==================
	// Animations
	// ==================
	
	function animateCSS(element, animationName, callback) {
		const node = document.querySelector(element);
		node.classList.add('animated', animationName);

		function handleAnimationEnd() {
			node.classList.remove('animated', animationName);
			node.removeEventListener('animationend', handleAnimationEnd);

			if (typeof callback === 'function') {callback();}
		}

		node.addEventListener('animationend', handleAnimationEnd);
	}
	
	// left tot right vid
//	if ( screen.width > 991 ) {
//		if($('.fpltr').visible()) {
//			$('.fpltr').addClass('animated bounceInLeft').css('visibility', 'visible');
//		}
//		$(window).scroll(function() {
//			if($('.fpltr').visible()) {
//				$('.fpltr').addClass('animated bounceInLeft').css('visibility', 'visible');
//			}
//		});
//	} else if ( screen.width < 992 ) {
//	    $('.fpltr').css('visibility', 'visible');
//    }
	
	
	
	
	// img sub header FP
	var fppct = false;
	if ( fppct == false ) {
		
		if($('.screens').visible()) {
			$('.screens').css('visibility', 'visible');
			animateCSS('.screens', 'flipInY', function(){
				$('.phone').css('visibility', 'visible');
				animateCSS('.phone', 'bounceInRight', function(){
					$('.screenIcons').css('visibility', 'visible');
					animateCSS('.screenIcons', 'flipInX');
				});
			});
			fppct = true;
		}
		$(window).scroll(function() {
			if($('.screens').visible() && fppct == false ) {
				fppct = true;
				$('.screens').css('visibility', 'visible');
				animateCSS('.screens', 'flipInY', function(){
					$('.phone').css('visibility', 'visible');
					animateCSS('.phone', 'bounceInRight', function(){
						$('.screenIcons').css('visibility', 'visible');
						animateCSS('.screenIcons', 'flipInX');
					});
				});
			}
		});
	}
	
	var fppct2 = false;
	if ( fppct2 == false ) {
		
		if($('.phoneF2').visible()) {
			$('.phoneF2').css('visibility', 'visible');
			animateCSS('.phoneF2', 'flipInY', function(){
				$('.iconsF2').css('visibility', 'visible');
				animateCSS('.iconsF2', 'bounceInRight', function(){
					$('.bgVid').css('visibility', 'visible');
					animateCSS('.bgVid', 'fadeIn');
				});
			});
			fppct2 = true;
		}
		$(window).scroll(function() {
			if($('.phoneF2').visible() && fppct2 == false ) {
				fppct2 = true;
				$('.phoneF2').css('visibility', 'visible');
				animateCSS('.phoneF2', 'flipInY', function(){
					$('.iconsF2').css('visibility', 'visible');
					animateCSS('.iconsF2', 'bounceInRight', function(){
						$('.bgVid').css('visibility', 'visible');
						animateCSS('.bgVid', 'fadeIn');
					});
				});
			}
		});
	}
	
	var fppct3 = false;
	if ( fppct3 == false ) {
		
		if($('.iconsF1').visible()) {
			$('.iconsF1').css('visibility', 'visible');
			animateCSS('.iconsF1', 'bounceInRight');
			fppct3 = true;
		}
		$(window).scroll(function() {
			if($('.iconsF1').visible() && fppct3 == false ) {
				fppct3 = true;
				$('.iconsF1').css('visibility', 'visible');
				animateCSS('.iconsF1', 'bounceInRight');
			}
		});
	}
	
	// mobile on instruments section - frontpage
//	var phonefp = false;
//	if ( phonefp == false ) {
//		
//		if($('.training ul').visible()) {
//			$('.training ul').css('visibility', 'visible');
//			animateCSS('.training ul', 'bounceInUp');
//			phonefp = true;
//		}
//		$(window).scroll(function() {
//			if($('.training ul').visible() && phonefp == false ) {
//				$('.training ul').css('visibility', 'visible');
//				phonefp = true;
//				animateCSS('.training ul', 'bounceInUp');
//			}
//		});
//	}
	
	// list on trainging section - frontpage
	var listTrFP = false;
	if ( listTrFP == false ) {
		
		if($('.training ul').visible()) {
			$('.training ul').css('visibility', 'visible');
			animateCSS('.training ul', 'fadeInRight');
			listTrFP = true;
		}
		$(window).scroll(function() {
			if($('.training ul').visible() && listTrFP == false ) {
				$('.training ul').css('visibility', 'visible');
				listTrFP = true;
				animateCSS('.training ul', 'fadeInRight');
			}
		});
	}
	
	
	// pins on map - frontpage
	if($('.imgMapWrapper>.rev').visible()) {
		$('.imgMapWrapper>.pin').addClass('animated fadeInLeft').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.imgMapWrapper>.rev').visible()) {
			$('.imgMapWrapper>.pin').addClass('animated fadeInLeft').css('visibility', 'visible');
		}
	});
	
	// mobile on instruments section - frontpage
	if($('.mphone').visible()) {
		$('.mphone').addClass('animated bounceInUp').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.mphone').visible()) {
			$('.mphone').addClass('animated bounceInUp').css('visibility', 'visible');
		}
	});
	
//	// list on trainging section - frontpage
//	if($('.training ul').visible()) {
//		$('.training ul').addClass('animated fadeInRight').css('visibility', 'visible');
//	}
//	$(window).scroll(function() {
//		if($('.training ul').visible()) {
//			$('.training ul').addClass('animated fadeInRight').css('visibility', 'visible');
//		}
//	});
	
	// list on tech section - frontpage
	if($('.tech ul').visible()) {
		$('.tech ul').addClass('animated fadeInLeft').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.tech ul').visible()) {
			$('.tech ul').addClass('animated fadeInLeft').css('visibility', 'visible');
		}
	});
	
	// Autochartist image - frontpage
	if($('.lapscreens').visible()) {
		$('.lapscreens .laptop').addClass('animated fadeInRight').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.lapscreens').visible()) {
			$('.lapscreens .laptop').addClass('animated fadeInRight').css('visibility', 'visible');
		}
	});
	if($('.lapscreens').visible()) {
		$('.lapscreens .screen1').addClass('animated bounceIn').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.lapscreens').visible()) {
			$('.lapscreens .screen1').addClass('animated bounceIn').css('visibility', 'visible');
		}
	});
	if($('.lapscreens').visible()) {
		$('.lapscreens .screen2').addClass('animated bounceIn').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.lapscreens').visible()) {
			$('.lapscreens .screen2').addClass('animated bounceIn').css('visibility', 'visible');
		}
	});
	if($('.lapscreens').visible()) {
		$('.lapscreens .screen3').addClass('animated bounceIn').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.lapscreens').visible()) {
			$('.lapscreens .screen3').addClass('animated bounceIn').css('visibility', 'visible');
		}
	});
	
	// friend referrals
//	if($('.revealer_ff').visible() && screen.width >= 992) {
//		$('.prodsect3_ff').addClass('animated slideInRight').css('visibility', 'visible');	
//	}
//	$(window).scroll(function() {
//		if($('.revealer_ff').visible() && screen.width >= 992) {
//			$('.prodsect3_ff').addClass('animated slideInRight').css('visibility', 'visible');	
//		}
//	});
	
	// accounts page
	if($('.cardInner').visible()) {
		if ( screen.width < 768 ) {
			$('.cardInner.un').addClass('animated bounceInLeft').css('visibility', 'visible');
			$('.cardInner.dos').addClass('animated bounceInRight').css('visibility', 'visible');
			$('.cardInner.tres').addClass('animated bounceInLeft').css('visibility', 'visible');
		} else {
			$('.cardInner').addClass('animated bounceInUp').css('visibility', 'visible');	
		}
	}
	$(window).scroll(function() {
		if ( screen.width < 768 ) {
			$('.cardInner.un').addClass('animated bounceInLeft').css('visibility', 'visible');
			$('.cardInner.dos').addClass('animated bounceInRight').css('visibility', 'visible');
			$('.cardInner.tres').addClass('animated bounceInLeft').css('visibility', 'visible');
		} else {
			$('.cardInner').addClass('animated bounceInUp').css('visibility', 'visible');	
		}
	});
	
	// products page
	if($('.aboutUsPhones').visible()) {
		$('.aboutUsPhones').addClass('animated slideInRight').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.aboutUsPhones').visible()) {
			$('.aboutUsPhones').addClass('animated slideInRight').css('visibility', 'visible');
		}
	});
//	if($('.aboutUsPhones').visible() && screen.width >= 992) {
//		$('.prodsect3').addClass('animated slideInRight').css('visibility', 'visible');	
//	}
//	$(window).scroll(function() {
//		if($('.aboutUsPhones').visible() && screen.width >= 992) {
//			$('.prodsect3').addClass('animated slideInRight').css('visibility', 'visible');	
//		}
//	});
	
	// friend referrals
	if($('.frndrefHiw').visible()) {
		$('.frndrefHiw').addClass('animated slideInLeft').css('visibility', 'visible');
		$('.hiwTW').addClass('animated bounceIn').css('visibility', 'visible');		
	}
	$(window).scroll(function() {
		if($('.frndrefHiw').visible()) {
			$('.frndrefHiw').addClass('animated slideInLeft').css('visibility', 'visible');
			$('.hiwTW').addClass('animated bounceIn').css('visibility', 'visible');		
		}
	});
	
	// Platforms and apps
	if($('.mt4tblt').visible()) {
		$('.mt4tblt').addClass('animated bounceInUp').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.mt4tblt').visible()) {
			$('.mt4tblt').addClass('animated bounceInUp').css('visibility', 'visible');
		}
	});
	
	// MT4 page
	if($('.lbW').visible()) {
		$('.lbW').addClass('animated fadeIn').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.lbW').visible()) {
			$('.lbW').addClass('animated fadeIn').css('visibility', 'visible');
		}
	});
	
	// Partner with Us
	if($('.imgAnim').visible()) {
		$('.imgAnim').addClass('animated fadeIn').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.imgAnim').visible()) {
			$('.imgAnim').addClass('animated fadeIn').css('visibility', 'visible');
		}
	});
	
//	if($('.gadgAnim').visible()) {
//		$('.gadgAnim').addClass('animated fadeInUp').css('visibility', 'visible');
//	}
//	$(window).scroll(function() {
//		if($('.gadgAnim').visible()) {
//			$('.gadgAnim').addClass('animated fadeInUp').css('visibility', 'visible');
//		}
//	});
	
	if($('.logoAnim1').visible()) {
		$('.logoAnim1').addClass('animated fadeInLeft').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.logoAnim1').visible()) {
			$('.logoAnim1').addClass('animated fadeInLeft').css('visibility', 'visible');
		}
	});
	
	if($('.logoAnim2').visible()) {
		$('.logoAnim2').addClass('animated fadeIn').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.logoAnim2').visible()) {
			$('.logoAnim2').addClass('animated fadeIn').css('visibility', 'visible');
		}
	});
	
	if($('.logoAnim3').visible()) {
		$('.logoAnim3').addClass('animated fadeInRight').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.logoAnim3').visible()) {
			$('.logoAnim3').addClass('animated fadeInRight').css('visibility', 'visible');
		}
	});
	
	// The partnership between FXORO and AS-ROMA
	var locBannerASR = $('#asRoma #banner > .container');
	if($(locBannerASR).visible()) {
		$(locBannerASR).addClass('animated fadeInRight').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($(locBannerASR).visible()) {
			$(locBannerASR).addClass('animated fadeInRight').css('visibility', 'visible');
		}
	});
	
	var locLaptopASR = $('.laptopW img');
	if($(locLaptopASR).visible()) {
		$(locLaptopASR).addClass('animated fadeInLeft').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($(locLaptopASR).visible()) {
			$(locLaptopASR).addClass('animated fadeInLeft').css('visibility', 'visible');
		}
	});
	
	
	// Trading conditions - professional/retail switcher
//	$('.switcher ul').on('click', function(){
//		var that 	= $( this );
//		var anchor 	= that.children().find('a');
//		
//		
//		if ( that.hasClass('left') ){
//			that.removeClass('left').addClass('right');
//		} else if ( that.hasClass('right') ) {
//			that.removeClass('right').addClass('left');
//		}
//	});
	
	
	// ==================
	// Video (front page):not(header)
	// ==================
	$('.play').on('click', function(){
		var target = $('.vid');
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top
			}, 1000);
		}
		target.css('z-index', 20);
		var vidH = $('#vidVid').height();
//		target.css('height', vidH);
//		target.animate({height: vidH}, 50);	
		
		if(screen.width < 576) {
			target.css('height', vidH);
		} else {
			target.animate({height: vidH}, 50);	
		}
	});
	$('.pause').on('click', function(){
		var target = $('.vid');
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top
			}, 1000);
		}
		target.removeClass('vidPlay');
		target.removeAttr("style");
	});
	
	// ==================
	// scroll to (New regulation-MIFID II and it’s impact on retail clients (page))
	// ==================
	$('.linktocriteriadetails').on('click', function(){
		var target = $('.CriteriaDetailsWr');
		event.preventDefault();
		$('html, body').stop().animate({
			scrollTop: target.offset().top
		}, 1000);
	});
	
	// ==================
	// Form (join section)
	// ==================
	$( ".phone-number, .phone-prefix" ).hover(
		function() {
			$(this).parent().addClass( "hovered" );
		}, 
		function() {
			$(this).parent().removeClass( "hovered" );
		}
	);	
	$( ".phone-number" ).on('focusin', function(){
		$(this).parent().addClass( "focused" );
	});
	$( ".phone-number" ).on('focusout', function(){
		$(this).parent().removeClass( "focused" );
	});
	
	// ==================
	// Back to top
	// ==================
//	$('a[href="#pwu3rdsect"]').on('click', function (e) {
//        e.preventDefault();
//        $('html,body').animate({
//            scrollTop: 0
//        }, 700);
//    });
		
});

// ==================
// Video (front page):not(header) vanilla js
// ==================
function playPause(btn, vid) {
	
	var vid = document.getElementById(vid);
	var overlay = document.getElementById('videofirstframe');
	var cntnt = document.getElementById('cntnt');
	var ctrlW = document.getElementById('ctrlW');
	var overBlue = document.getElementById('overlay');
	
	if(vid.paused) {
		
		overlay.classList.add('hide');
		cntnt.classList.add('hide');
		ctrlW.classList.add('show');
		overBlue.classList.add('hide');
		vid.play();
		
	} else {
		
		vid.pause();
		overlay.classList.remove('hide');
		cntnt.classList.remove('hide');
		ctrlW.classList.remove('show');
		overBlue.classList.remove('hide');
		
	}
	
}
function muteUn(btn, vid) {
	
	var vid = document.getElementById(vid);
	var mute = document.getElementById('mute');
	var unmute = document.getElementById('unmute');
	
	if(vid.muted) {
		
		vid.muted = false;
		unmute.classList.add('d-none');
		unmute.classList.remove('d-inline');
		mute.classList.add('d-inline');
		mute.classList.remove('d-none');
		
	} else {
		
		vid.muted = true;
		mute.classList.add('d-none');
		mute.classList.remove('d-inline');
		unmute.classList.add('d-inline');
		unmute.classList.remove('d-none');
		
	}
}

// ==================
// Google map
// ==================
//function initMap() {
//  // The location of Uluru
//  var uluru = {lat: -25.344, lng: 131.036};
//  // The map, centered at Uluru
//  var map = new google.maps.Map(
//      document.getElementById('gmap'), {zoom: 4, center: uluru});
//  // The marker, positioned at Uluru
//  var marker = new google.maps.Marker({position: uluru, map: map});
//}

// JS vanilla animate.css
