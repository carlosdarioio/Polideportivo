<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="ic_launcher.png">
<link href="estilos.css" type="text/css" rel="stylesheet" />
    <title>Polideportivo</title>

    <!-- Bootstrap core CSS -->
      <link href="Content/bootstrap.min.css" rel="stylesheet" />
	  <link href="Content/bootstrap.css" rel="stylesheet" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet"/>
	
	
  </head>
<!-- NAVBAR
================================================== -->
  <body>     
    <div class="navbar-wrapper">
      
	 <div class="contenedor"> 

	 
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="contenedor">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="1Informacion.php">Proyecto Web</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="1loggin.php">Login</a></li>
                <li class="active"><a href="1Principal.php">Inicio</a></li>
                <li> <a href="1Registro.php"> Registro </a></li>
                <li><a href="1Reservacion.php">Reservación</a></li>
                <li><a href="1Retos.php">Retos</a></li>
                <li><a href="1Torneo.php">Torneo</a></li>
				
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca de <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
				    <li><a href="AcercaDe.php">AcercaDe</a></li>
                    <li><a href="Manual.pdf">Manual de usuario</a></li>
                    <li><a href="Historial.php">Historial</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Enlaces</li>
                    <li><a href="https://www.facebook.com/unitec.honduras?fref=ts"  target="_blank">Facebook</a></li>
                    <li><a href="https://portal.unitec.edu"target="_blank">Portal</a></li>
                    <li><a href="https://accounts.google.com/ServiceLogin?continue=http%3A%2F%2Fmail.google.com%2Fmail%2F%3Fpc%3Des-ha-latam-latam-bk-refresh13&service=mail&dsh=-7901037488265739341"target="_blank">Correo</a></li>
                  </ul>
                </li>
				<li>
				<?php
				if($_SESSION['cuenta']!="")
				{
				echo "<a href='"."salir.php"."'>".$_SESSION[cuenta]."( Cerrar Sesion )</a>";
				}
				?>
				
				</li>
				
              </ul>
            </div>
          </div>
        </div>

      </div> 
 	 
	  
    </div>

      

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide mmm2" data-ride="carousel">        
             
	 </div><!-- /.carousel -->


    <div class="contenedor marketing">
      <!--Anuncion Android -->
		  <div class="" id="android" placeholder="Descargar"></div>
				<script type="text/javascript">
                var device = navigator.userAgent

                if (device.match(/Android/i))
                 {
                 //alert("entre");
				 document.getElementById("android").innerHTML ="Descarga nuestra aplicacion<br>Polideportivo<br> Android:<br><a href='https://www.dropbox.com/s/ra8bo0yzhhnjvyx/polideportivo.apk?dl=0'><img src='ic_launcher.png' width='50' height='60'></img></a>";

                 }
				 
				 if (device.match(/Iphone/i)|| device.match(/Ipod/i) || device.match(/iPhone|iPad|iPod/i))
                 {
                 //alert("entre");
				 document.getElementById("android").innerHTML ="Descarga nuestra aplicacion<br>Polideportivo IOS:<br><a href='http://mobincube.mobi/959YV'><img src='ic_launcher.png' width='50' height='60'></img></a>";

                 }
				 
		          if (device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i))
                  {
                      document.getElementById("android").innerHTML ="Descarga nuestra<br> aplicacion<br>Polideportivo<br>Windows hone :<br><a href='https://www.dropbox.com/s/8xmko1nhdqh5y4t/Polideportivo.xap?dl=0'><img src='ic_launcher.png' width='50' height='60'></img></a>";


                         }

				 //http://mobincube.mobi/959YV

                     </script> 
		  
		  <!-- Fin anuncio-->
      <div class="FiLa">
       <div class="MMM"></div>
      </div><!-- /.FiLa -->


      <hr class="featurette-divider">

      <div class="FiLa featurette">
        <div class="columna7">
          <h2 class="featurette-heading">Torneo de futbolito: <span class="text-muted">Champions Jaguar League.</span></h2>
          <p class="lead">¿Te gusta el fútbol?, ¿Crees que tienes lo necesario para salir campeón en cualquier torneo con tu equipo?... Entonces ven y demuéstralo en este espectacular torneo!!!, registra tu equipo y participa en el más glorioso de los torneos, no te arrepentirás , ¿Qué esperas?</p>
        </div>
        <div class="columna5">
          <img class="featurette-image img-responsive" src="Imagenes/preview.jpg" alt="Generic placeholder image"/>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="FiLa featurette">
        <div class="columna5">
          <img class="featurette-image img-responsive" src="Imagenes/3--50165-volleyball%20silhouette.jpg" alt="Generic placeholder image"/>
        </div>
        <div class="columna7">
          <h2 class="featurette-heading">Torneo de Voleibol : <span class="text-muted"></span></h2>
          <p class="lead">
		  Voleibol , es un deporte donde dos equipos se enfrentan sobre un terreno de juego liso separados por una red central, tratando de pasar el balón, usualmente mediante golpes con las manos, por encima de la red hacia el suelo del campo contrario. Habitualmente el balón se golpea con manos y brazos, pero también con cualquier otra parte del cuerpo. Una de las características más peculiares del voleibol es que los jugadores tienen que ir rotando sus posiciones a medida que van consiguiendo puntos.
		  
		  </p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="FiLa featurette">
        <div class="columna7">
          <h2 class="featurette-heading">Torneo de Basketball: <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">
		  
		  Es un juego de gran rapidez y habilidad. Básicamente consiste en llevar
		  el balón al campo contrario mediante pases o haciéndolo rebotar en el 
		  suelo mientras se avanza con él.

           El partido consta de dos tiempos o mitades que duran 20 minutos cada uno.
           Tienen un descanso de 10 o 15 minutos.

              	  </p>
        </div>
        <div class="columna5">
          <img class="featurette-image img-responsive" src="Imagenes/basketball.jpg" alt="Generic placeholder image"/>
        </div>
      </div>

       

      <hr class="featurette-divider">

        <div id="Pie">
                 <p class="pull-right"><a href="#">subir!!</a></p>
                <span> &copy; 2014 - Solicitud para reservación de canchas del polideportivo
				<br><li><a href="1salir.php">Salir</a></li></span>             
             </div>
     

    </div><!-- /.contenedor -->

   
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
         <script src="txtok.js"></script>
		 
		 
		  <script type="text/javascript">
            $(document).ready(function () {
                $('ul.sf-menu').sooperfish();
                $('.top').click(function () { $('html, body').animate({ scrollTop: 0 }, 'fast'); return false; });
            });
                </script>
		 
         <script src="Scripts/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
