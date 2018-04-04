function menu()
{

$txt=' <div class="columna4">'
          +'<img class="img-circle" src="Imagenes/chinaz1.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">'
          +'<h2>Login</h2>'
          +'<p>Inicia sesión para poder mandar tu solicitud de reservación.</p>'
          +'<p><a class="btn btn-default" href="1Reservacion.php" role="button">Ir a página &raquo;</a></p>'
        +'</div><!-- /.col-lg-4 -->'
        +'<div class="columna4">'
          +'<img class="img-circle" src="Imagenes/huella.png" alt="Generic placeholder image" style="width: 102px; height: 140px;">'
          +'<h2>Registro</h2>'
          +'<p>¿Aún? no estás registrado?, ¿Qué esperas?.. Registrate con tus datos estudiantiles y sácale el máximo provecho a los recursos que te ofrece Ceutec. Aprovecha!!!</p>'
          +'<p><a class="btn btn-default" href="1Registro.php" role="button">Ir a página &raquo;</a></p>'
		  +'</div><!-- /.col-lg-4 -->'
        +'<div class="columna4">'
         +' <img class="img-circle" src="Imagenes/balones.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">'
          +'<h2>Reservación</h2>'
          +'<p>Si ya estás registrado sólo inicia sesión para poder mandar tu solicitud de reservarción.</p>'
          +'<p><a class="btn btn-default" href="1Reservacion.php" role="button">Ir a página &raquo;</a></p>'
        +'</div><!-- /.col-lg-4 -->'



$('.MMM').prepend($txt);

}

function ImGs(){

$txt='  <ol class="carousel-indicators">'
        +'<li data-target="#myCarousel" data-slide-to="0" class="active"></li>'
        +'<li data-target="#myCarousel" data-slide-to="1"></li>'
       +' <li data-target="#myCarousel" data-slide-to="2"></li>'
      +'  <li data-target="#myCarousel" data-slide-to="3"></li>'
     +' </ol>'
     +' <div class="carousel-inner">'
    +'    <div class="item active">'
         +'   <img src="Imagenes/jaguares1.png" alt="First slide"/>'
       +'   <div class="contenedor">'
            +'<div class="carousel-caption">'
            +'  <h1>Solicitud para Reservación de Cancha</h1>'
           +'   <p>Bienvenido: Desde ésta app web podrás enviar una solicitud pidiendo una reservación de cualquiera de las canchas del polideportivo de ceutec.</p>'
          +'    <p><a class="btn btn-lg btn-primary" href="1Registro.php" role="button">Registrate ahora</a></p>'
         +'   </div>'
        +'  </div>'
       +' </div>'
        +'<div class="item">'
          +'  <img src="Imagenes/95088-cl_12_09_hacienda-tobalaba_fs_-thumb.jpg" alt="Second slide"/>'
         +' <div class="contenedor">'
           +' <div class="carousel-caption">'
             +' <h1>Futbolito</h1>'
            +'  <p>¿Te gusta el fútbol? ¿Crees que tienes lo necesario para salir campeón con tu equipo?... Entonces ven y demuéstralo en este espectacular torneo!!!, registra tu equipo y participa en el más glorioso de los torneos, no te arrepentirás , ¿Qué esperas?</p>'
           +' </div>'
          +'</div>'
        +'</div>'
        +'<div class="item">'
          +'  <img src="Imagenes/1776859.jpg" alt="Third slide"/>'
         +' <div class="contenedor">'
            +'<div class="carousel-caption">'
             +' <h1>Voleibol</h1>'
            +'  <p>¿Sabias que Ceutec tiene un equipo de Voleibol ? Si te gustaria unirte avocate con el encargado del polideportivo.</p>'
           +' </div>'
          +'</div>'
        +'</div>'
        +'<div class="item">'
           +' <img src="Imagenes/basketball120206_560.jpg" alt="Fourth slide"/>'
          +'<div class="contenedor">'
           +' <div class="carousel-caption">'
              +'<h1>Baloncesto</h1>'
              +'<p>El Baloncesto es tu refugio, o tu santuario?'
		       +'  Vuelve a ser un niño en el patio. '
		      +'   Porque cuando llega el partido, todo es bueno.</p>'
            +'</div>'
          +'</div>'
        +'</div>'
      +'</div>'
      +'<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>'
      +'<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>';


$('.mmm2').prepend($txt);

}



menu();ImGs();
