$(function() {
	$(window).scroll(function(event) {
		console.log('ban vua cuon chuot');
		//thay viet dung $('body'), nhung may minh khong work nen minh phau dung $('html,body')
		var vitri = $('html,body').scrollTop();
		if((vitri>=392) && (vitri<=700))
		{
			$('.menutren').addClass('bienhinh');
		}
		else{
			$('.menutren').removeClass('bienhinh');
		}
		 if((vitri>700) && (vitri<1600)){
		 	$('.menutren').addClass('xayzacap1');
		 }
		 else{
		 	$('.menutren').removeClass('xayzacap1');
		 }
		 if((vitri>1600) && (vitri<2400)){
		 	$('.menutren').addClass('xayzacap2');
		 }
		 else{
		 	$('.menutren').removeClass('xayzacap2');
		 }
	});
});