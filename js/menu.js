$(document).ready(function(){
$('.logo figure').attr('data-content', 'ARQUITECTURA · INGENIERÍA · CONSTRUCCIÓN');
	
	$(window).scroll(function(event){
		var y = $(this).scrollTop();


		if (y >= 50) {
			$('.logo').addClass('logoAnim');
		}else{
			$('.logo').removeClass('logoAnim');
		}

		if (y >= 50) {
			$('header').addClass('headerAn');
		}else{
			$('header').removeClass('headerAn');
		}

		if (y >= 50) {
			$('header nav ul li').addClass('liAn');
		}else{
			$('header nav ul li').removeClass('liAn');
		}

		if (y >= 50){
			$('.logo figure').attr('data-content', ' ');
		}else{
			$('.logo figure').attr('data-content', 'ARQUITECTURA · INGENIERÍA · CONSTRUCCIÓN');
		}

	});



});


