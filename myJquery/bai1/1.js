$(document).ready(function() {
	//cho tat ca noi dung thu lai
	$('.ndmotkhoi').slideUp();

	$('.motkhoi h3').click(function(event) {
		$('.ndmotkhoi').slideUp();
		//$(this).next().slideDown(); tha cai le tiep
		//$('.ndmotkhoi').slideDown(); tha xuong het
		$(this).next().slideToggle();//tu no biet co len tha xuong
		//$(this).addClass('xanh');
		$(this).toggleClass('xanh');
	});
});