/*
 *	Controls the slider in the header
 *		@author Miranda Johnson miranda.j.johnson@gmail.com
 *		@date 09/17/2015
*/

$(document).ready(function() {
	$('header .slider span').on('click', function() {
		var selector = '.slider ul';
		var currentSlide = $(selector + ' li:visible');
		
		if ($(this).hasClass('arrow-right')) {
			var nextSlide = currentSlide.next();
			slide(currentSlide, nextSlide, selector, 'first');		
			
		} else if ($(this).hasClass('arrow-left')) {
			var nextSlide = currentSlide.prev();
			slide(currentSlide, nextSlide, selector, 'last-child');
		}
	});
});

function slide(currentSlide, nextSlide, selector, loop) {
	currentSlide.slideToggle(500, function() {
		if (nextSlide.length > 0) {
			nextSlide.slideToggle(500);
		} else {
			$(selector + ' li:' + loop).slideToggle(500);
		}
	});
	
}