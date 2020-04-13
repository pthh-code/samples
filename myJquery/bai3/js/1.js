
$(function() {
	$('.tdkhoi').click(function(event) {

	$(this).toggleClass('xanh');
	$(this).next().slideToggle(500);

	//xu dung animate() cho no chuyen dong
	$('html,body').animate({scrollTop:$(this).offset().top});

	});

	/*phong anh to*/
	$(".vaicaianh a").fancybox();

	//cho cac de muc co lai
	$(".ndkhoi").slideUp();
});