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
	$('table').addClass('table table-bordered').wrap('<div class="table-responsive"></div>'); // add table(bootstrap) class on all table elements on the site
	
	
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
	$('.menu_caret').on('click', function(){ // inchis
		if ($(this).parent().hasClass('menu_open')) {
			
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
			992:{ items:3 }
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
	
	// pins on map
	if($('.imgMapWrapper>.rev').visible()) {
		$('.imgMapWrapper>.pin').addClass('animated fadeInLeft').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.imgMapWrapper>.rev').visible()) {
			$('.imgMapWrapper>.pin').addClass('animated fadeInLeft').css('visibility', 'visible');
		}
	});
	
	// mobile on instruments section
	if($('.mphone').visible()) {
		$('.mphone').addClass('animated bounceInUp').css('visibility', 'visible');
	}
	$(window).scroll(function() {
		if($('.mphone').visible()) {
			$('.mphone').addClass('animated bounceInUp').css('visibility', 'visible');
		}
	});
	
	// list on trainging section
	if($('.training ul').visible()) {
		$('.training ul').addClass('animated fadeInRight').css('visibility', 'visible');;
	}
	$(window).scroll(function() {
		if($('.training ul').visible()) {
			$('.training ul').addClass('animated fadeInRight').css('visibility', 'visible');;
		}
	});
	
	// list on tech section
	if($('.tech ul').visible()) {
		$('.tech ul').addClass('animated fadeInLeft').css('visibility', 'visible');;
	}
	$(window).scroll(function() {
		if($('.tech ul').visible()) {
			$('.tech ul').addClass('animated fadeInLeft').css('visibility', 'visible');;
		}
	});
	
	// Autochartist image
//	if($('.whole').visible()) {
//		$('.whole .laptop').addClass('animated slow fadeIn').css('visibility', 'visible');;
//	}
//	$(window).scroll(function() {
//		if($('.whole').visible()) {
//			$('.whole .laptop').addClass('animated slow fadeIn').css('visibility', 'visible');;
//		}
//	});
//	if($('.whole').visible()) {
//		$('.whole .tablet').addClass('animated slow bounceInRight').css('visibility', 'visible');;
//	}
//	$(window).scroll(function() {
//		if($('.whole').visible()) {
//			$('.whole .tablet').addClass('animated slow bounceInRight').css('visibility', 'visible');;
//		}
//	});
//	if($('.whole').visible()) {
//		$('.whole .phone').addClass('animated slow bounceInUp').css('visibility', 'visible');;
//	}
//	$(window).scroll(function() {
//		if($('.whole').visible()) {
//			$('.whole .phone').addClass('animated slow bounceInUp').css('visibility', 'visible');;
//		}
//	});
	if($('.lapscreens').visible()) {
		$('.lapscreens .laptop').addClass('animated fadeInRight').css('visibility', 'visible');;
	}
	$(window).scroll(function() {
		if($('.lapscreens').visible()) {
			$('.lapscreens .laptop').addClass('animated fadeInRight').css('visibility', 'visible');;
		}
	});
	if($('.lapscreens').visible()) {
		$('.lapscreens .screen1').addClass('animated bounceIn').css('visibility', 'visible');;
	}
	$(window).scroll(function() {
		if($('.lapscreens').visible()) {
			$('.lapscreens .screen1').addClass('animated bounceIn').css('visibility', 'visible');;
		}
	});
	if($('.lapscreens').visible()) {
		$('.lapscreens .screen2').addClass('animated bounceIn').css('visibility', 'visible');;
	}
	$(window).scroll(function() {
		if($('.lapscreens').visible()) {
			$('.lapscreens .screen2').addClass('animated bounceIn').css('visibility', 'visible');;
		}
	});
	if($('.lapscreens').visible()) {
		$('.lapscreens .screen3').addClass('animated bounceIn').css('visibility', 'visible');;
	}
	$(window).scroll(function() {
		if($('.lapscreens').visible()) {
			$('.lapscreens .screen3').addClass('animated bounceIn').css('visibility', 'visible');;
		}
	});
	
	
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