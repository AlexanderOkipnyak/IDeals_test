//var $ = jQuery.noConflict();

jQuery.noConflict();
(function( $ ) {
	$(function() {
		$(document).ready(function(){
			$('.merch_carousel').owlCarousel({
				loop : true,
				nav : true,
				items : 1,
				autoplay : true,
				autoplayTimeout : 5000,
				autoplayHoverPause : true,
			});
			
		});
		$('.search_btn').click(function(){
			$(this).closest('.search_container').addClass('active').find('#s').focus();
			return false;
		});
		$('#s').blur(function(){
			$(this).closest('.search_container').removeClass('active');
		})
		$('.arrow_down_btn a').click(function(){
			$("html, body").animate({ scrollTop: $('.home_news').offset().top }, 700);
			return false;
		});
		$('.mobile_menu_btn').click(function(){
			$('.mobile_navigation').addClass('active');
			return false;
		});
		$('.close_menu').click(function(){
			$('.mobile_navigation').removeClass('active');
			return false;
		});
		$(document).click(function(event) { 
		  var $target = $(event.target);
		  if(!$target.closest('.mobile_navigation').length) {
		    $('.mobile_navigation').removeClass('active');
		  }        
		});
 	});
})(jQuery);