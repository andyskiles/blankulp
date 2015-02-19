(function() {
	'use strict';

	$(document).ready(function() {
		$('#BusLit').click(function() {
			$('html, body').animate({
				scrollTop: $('#BusinessLit').offset().top
			}, 2000);
		});

		$('#AltDis').click(function() {
			$('html, body').animate({
				scrollTop: $('#AlternativeDis').offset().top
			}, 2000);
		});

		$('#LaE').click(function() {
			$('html, body').animate({
				scrollTop: $('#Labor').offset().top
			}, 2000);
		});
	});
})();