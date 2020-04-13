$(function() {

	thoigian = setInterval (function(){
		$('.next').trigger('click')},3000);
	$('.next').click(function(event) {
		//clearInterval(thoigian);
		var sau = $('.active').next();
        var vitri = $('.xanh').index()+1;
        $('.nutslide ul li').removeClass('xanh');
        if(vitri == $('.nutslide ul li').length){
        	vitri=0;
        }
        $('.nutslide ul li:nth-child('+(vitri+1)+')').addClass('xanh')
		if(sau.length == 0)
		{
			$('.active').addClass('bien-mat-o-ben-trai').one('webkitAnimationEnd', function(event) {
			$('.bien-mat-o-ben-trai').removeClass('bien-mat-o-ben-trai');
		});
            //cho slide cuoi cung roi , lay slide dau lafm slide tiep theo
			$('.anhslide ._1slide:nth-child(1)').addClass('di-vao-tu-ben-phai').one('webkitAnimationEnd', function(event) {
			$('.active').removeClass('active');
			$('.di-vao-tu-ben-phai').addClass('active').removeClass('di-vao-tu-ben-phai');
		});
		}
		else{
		$('.active').addClass('bien-mat-o-ben-trai').one('webkitAnimationEnd', function(event) {
			$('.active').removeClass('bien-mat-o-ben-trai');
		});
		
		sau.addClass('di-vao-tu-ben-phai').one('webkitAnimationEnd', function(event) {
			$('.active').removeClass('active');
			$('.di-vao-tu-ben-phai').addClass('active').removeClass('di-vao-tu-ben-phai');
		});
}

	});
	// nut prev
    $('.prev').click(function(event) {
    	//clearInterval(thoigian);
    	var truoc = $('.active').prev();
        var vitri = $('.xanh').index()+1;
        $('.nutslide ul li').removeClass('xanh');
        if(vitri == 1){
        	vitri=$('.nutslide ul li').length+1;
        }
        $('.nutslide ul li:nth-child('+(vitri-1)+')').addClass('xanh')
       if(truoc.length == 1){
    	$('.active').addClass('bien-mat-o-ben-phai').one('webkitAnimationEnd', function(event) {
			$('.bien-mat-o-ben-phai').removeClass('bien-mat-o-ben-phai');
		});

		truoc.addClass('di-vao-tu-ben-trai').one('webkitAnimationEnd', function(event) {
			$('.active').removeClass('active');
			$('.di-vao-tu-ben-trai').addClass('active').removeClass('di-vao-tu-ben-trai');
		});
	}
	else{
		$('.active').addClass('bien-mat-o-ben-phai').one('webkitAnimationEnd', function(event) {
			$('.bien-mat-o-ben-phai').removeClass('bien-mat-o-ben-phai');
		});

		$('.anhslide ._1slide:last-child').addClass('di-vao-tu-ben-trai').one('webkitAnimationEnd', function(event) {
			$('.active').removeClass('active');
			$('.di-vao-tu-ben-trai').addClass('active').removeClass('di-vao-tu-ben-trai');
		});
	}


    });
	//nut chuyen slide o duoi
	   $('.nutslide ul li').click(function(event) {
	   	$('.nutslide ul li').removeClass('xanh');
	   	$(this).addClass('xanh');
        $('.active').addClass('bien-mat-o-ben-phai').one('webkitAnimationEnd', function(event) {
			$('.bien-mat-o-ben-phai').removeClass('bien-mat-o-ben-phai');
		});

		$('.anhslide ._1slide:nth-child('+($(this).index()+1)+')').addClass('di-vao-tu-ben-trai').one('webkitAnimationEnd', function(event) {
			$('.active').removeClass('active');
			$('.di-vao-tu-ben-trai').addClass('active').removeClass('di-vao-tu-ben-trai');
		});
	   });


});