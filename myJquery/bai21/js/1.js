$(function() {
			//cho nay no khong can biet cuon chuot hay khong, no o vi tri nay la o vi tri nay
		var vitrimenu = $('.menutren').offset().top;
	$(window).scroll(function(event) {

		//khi cuon chuot den dau tren body no thay doi gia tri den do
		var vitribody = ($('html,body').scrollTop());
 //console.log(vitribody);
		//dung offset() de tinh vi tri bat ky ngoai body
		
      if(vitribody>=vitrimenu){
      	$('.menutren').addClass('menubeo');
      	//console.log(vitrimenu);
      }
      else{
      	$('.menutren').removeClass('menubeo');
      	//console.log(vitrimenu);
      }
		
	
	});
});