$(document).ready(function(){

	$(window).scroll(function(event){
		var y = $(this).scrollTop();


		if (y >= 50) {
			$('.img_nos').addClass('img_mov');
		}
		if (y >= 50) {
			$('.Nosotros').addClass('Nosotros_anim');
		}

		if (y >= 500) {
			$('.serv i').addClass('i_anim');
		}
		
	});

var serv = document.getElementById("Servic");
var hist = document.getElementById("hist");
var altura = serv.offsetTop;

window.addEventListener('scroll', function(){
	'use strict'
	if (window.pageYOffset > altura) {
		hist.classList.add("historia_anim");
	}

});


});


 