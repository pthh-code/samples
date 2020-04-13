$(function() {
	$(window).scroll(function(event) {
		var vitribody = $('html, body').scrollTop();
		var vitrigiaodien = $('.giaodien').offset().top;

		vitrigiaodien = vitrigiaodien - 650;
		$('.giaodien').addClass('hienra');
	});
});