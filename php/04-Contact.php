
<link rel="stylesheet" href="css/estilo-contact.css">

<div class="contenidoContacto" id="cont">
    <section class="infoConact">
        <p class="TitContact">CONTACTO</p>
            <ul class="infoContactoCompleta">
                <li>Consultora Constructora IEM</li>
                <li>(506) 8577 0508 - (506) 8405 2497</li>
                <li>info@iemcr.com / iemcr@cfia.or.cr / iemcr@ice.co.cr </li>
                <li>Cartago, Costa Rica</li>
            </ul>
 
 <p class="TitContact" style="margin-bottom:0px">UBICACIÓN</p>
        <div class="ContMapa">
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2020.5593763730135!2d-83.923448!3d9.8513135!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2ses!4v1483738999710" frameborder="0" style="border:0" allowfullscreen>
            </iframe>        
            <div class="backIframe"></div>
        </div>
    </section>

    <section class="form">
    <p class="TitContact" style="text-align:left">MENSAJE</p>
        <form action="php/procesos/envio-msj.php" method="post" class="contacto">
        
            
            <input type="text" name="nombre" id="nombre"  required="" placeholder="Nombre (Requerido)">         
            <input type="text" name="apellido" id="apellido" placeholder="Apellido">         
            <input type="email" name="correo" id="correo" required="" placeholder="Correo (Requerido)">
            <input type="text" name="asunto" id="asunto" placeholder="Asunto (Requerido)">
            <textarea name="mensaje" id="mensaje" required="" placeholder="Mensaje (Requerido)"></textarea>
            <br>
            
            <section id="boton">
            <input type="submit" id="btn" name="btn" value="Enviar Mensaje">
            </section>
          
        </form>
    </section>
</div>

<script>
    $('input,textarea').focus(function(){
   $(this).data('placeholder',$(this).attr('placeholder'))
          .attr('placeholder','');
}).blur(function(){
   $(this).attr('placeholder',$(this).data('placeholder'));
});

$(document).ready(function(){
    $('.backIframe').click(function(){
        $(this).fadeOut(200);
    });
    $('.mapa').mouseout(function(){
        $('.backIframe').fadeIn(200);
    });
});
</script>