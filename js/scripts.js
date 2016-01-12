(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
			//rewrite html based on nav class
			if ($('nav').hasClass('under-right')) {
				$('main').addClass('full-w-right w-right');
			}
			if ($('nav').hasClass('under-left')) {
				$('main').addClass('full-w-left w-left');
			}
			if ($('nav').hasClass('fade-in')) {
				$('.fade-in ul').wrap('<div class="modal-bg">');
			}
			
			//default mobile menu toggle
			$('.static-nav .nav_btn').click(function(){
			  $('nav ul').stop().slideToggle(500);
			});
			
			//left slide toggle
			$('.slide-left .nav_btn').click(function(){
			  $('.slide-left ul').stop().toggleClass('left-position');
			});
			
			//right slide toggle
			$('.slide-right .nav_btn').click(function(){
			  $('.slide-right ul').stop().toggleClass('right-position');
			});
			
			//move menu to inside main wrap , position it left
			$('.under-left').prependTo('.full-w-left');
			$('.under-left .nav_btn').click(function(){
			  $('.full-w-left').stop().toggleClass('w-left');
			});
			function copyLeftMenu() {
				$('.under-left ul').clone().insertAfter('.full-w-left').addClass('hidden-menu');
			}
			$(document).ready(copyLeftMenu);
			
			//move menu to inside main wrap, position it right 
			$('.under-right').prependTo('.full-w-right');
			$('.under-right .nav_btn').click(function(){
			  $('.full-w-right').stop().toggleClass('w-right');
			});
			function copyRightMenu() {
				$('.under-right ul').clone().insertAfter('.full-w-right').addClass('hidden-menu right-0');
			}
			$(document).ready(copyRightMenu);
			
			//fade in menu on mobile site
			$('.fade-in .nav_btn').click(function(){
				$('.modal-bg').toggleClass('modal-show');
				$('.modal-bg ul').toggleClass('block-show');
			});
			
			//write height of nav to variable
			var navHeight = $('nav').height();
			
			//correctly position next element after fixed-nav
			if ($('nav').hasClass('fixed-nav')){
				$('nav + *').css('margin-top', navHeight);
			}
				
			});
	
})(jQuery, this);
