<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>

	
	<link rel="stylesheet" href="css/estilo-foot.css">
	<link rel="stylesheet" href="css/estilo-general.css">
	<link rel="stylesheet" href="css/nav.css">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="Keywords" content="consultoria, construccion, diseño, arquitectura">
	<meta name="Description" content="IEM es una firma dedicada a la consultoría y construcción en las ramas de arquitectura e ingeniería para la construcción civil y electromecánica,">
	<meta name="author" content="Andres Monge">
	<meta name="format-detection" content="telephone=no">

	<link rel="shortcut icon" href="img/logoiem35.png" type="image/x-icon">


	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/mov_sitio.js"></script>
	<script src="js/menu.js"></script>

	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<script src="js/jquery.fancybox.min.js"></script>

</head>
<body>

	<header>
		<nav>
		<input type="checkbox" name="MenuResp" id="MenuResp" class="oculto">
		<label for="MenuResp" class="Menu">
			<div class="linMenu1"></div>
			<div class="linMenu2"></div>
			<div class="linMenu3"></div>
		</label>
			<ul>
				<a href="#miId"><li class="LiMenu">NOSOTROS</li></a>
				<a href="#proy"><li class="LiMenu">PROYECTOS</li></a>
				<li class="logo"><a href="#miId"><figure><img src="img/logoiem.png" alt=""></figure></a></li>
				<a href="#pers"><li class="LiMenu">PERSONAL</li></a>
				<a href="#cont"><li class="LiMenu">CONTACTO</li></a>
			</ul>
		</nav>
	</header>


<div class="Cont_Contenido" >
	<?php 
		include('php/00-Slider.php');
		include('php/01-Inicio.php');
		include('php/02-Proyectos.php');
		include('php/03-Personal.php');
		include('php/04-Contact.php');
	?>
</div>

<footer>
	<p>Todos los Derechos reservados 2016.</p>
</footer>
</body>
</html>



<script>

$(function(){

    $('a').click(function() {

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {

            var $target = $(this.hash);

            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

            if ($target.length) {

                var targetOffset = $target.offset().top;

                $('html,body').animate({scrollTop: targetOffset}, 1000);

                return false;

            }

       }

   });
});

</script>