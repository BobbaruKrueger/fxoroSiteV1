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
			csseco_get_bs_thumbs(id);
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
	$('table').addClass('table'); // add table(bootstrap) class on all table elements on the site
	
	
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
		$('#bmenu').removeClass('open');
		$('body').css('overflow', 'auto');
		$(menuBtnOpenClass).removeClass('open_menu');
	});
	
	
	// ==================
	// Owl Carousel
	// ==================
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots:false,
		responsive:{
			0:{
				items:1
			},
			576:{
				items:2
			},
			768:{
				items:3
			}
		}
	});

});