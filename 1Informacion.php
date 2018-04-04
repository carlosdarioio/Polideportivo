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
    <title>Informacion | Polideportivo</title>

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
              <a href="1Informacion.php" class="navbar-brand">Proyecto Web</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="1loggin.php">Login</a></li>
                <li><a href="1Principal.php">Inicio</a></li>
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
   
 
   
   
   
     <div class="FiLa">
       <div class="MMM"></div>
      </div><!-- /.FiLa -->
   
   
      <div class="FiLa">
        <div class="columna4">
          <h2> Bienvenidos </h2>
          <p>
		 
		    Esta es una página incorporada para servicios relacionados con la cancha.
			Por este medio podrás conocer información sobre los deportes que ofrecemos
			en la universidad así como la opción para poder apartar la cancha con una
			anticipación ya establecida según la solicitud, entre otras cosas, también
			tendrán la opción de registrarse en los próximos eventos deportivos que se
			llevaran a cabo en la universidad por este medio, y retar a otras personas
			en el deporte.
		  </p>
          
        </div><!-- /.col-lg-4 -->
       

	   <div class="columna4">
          <img class="img-circle" src="Imagenes/jaguares1.png" alt="Generic placeholder image" style="width: 102px; height: 140px;">
          <p><h3>Inicia sesión</h3>
            Para poder utilizar los servicios que ofrece la página una vez te
			registres se requerida iniciar sesión: <a href="1loggin.php">loggin</a>
		  </p>
		  
		
		  </div><!-- /.col-lg-4 -->
        
		<div class="columna4">
          <img class="img-circle" src="" alt="Generic placeholder image" style="width: 1px; height: 1px;">
          <h2>Solicitud del área</h2>
          <p>  
		  Para poder solicitar alguna cancha debes ser estudiante universitario además
			de registrare por este link:  <a href="1Registro.php">Regístrate </a> solo necesitaras ingresar los datos
 			requeridos y así podrás solicitar tu cancha de manera online: <a href="1Reservacion.php">Reservación </a></p> 
        </div><!-- /.col-lg-4 -->
		
		
		
				
		
		
      </div><!-- /.FiLa col-sm-4 col-md-4 col-lg-4-->


     <div class="FiLa">
	 <div class="columna6">
          <img class="img-circle" src="" alt="Generic placeholder image" style="width: 1px; height: 1px;">
          <h2>Retos</h2>
          <p>
          
            Te gusta el deporte y buscas personas con quienes enfrentarte, entonces
			éntrale a los retos para registrarte en busque de tu siguiente rival
			solo necesitas estar registrado he iniciar sesión para poder llenar los
			datos sobre tu disponibilidad o acepta alguno de los tantos retos que otros
			estudiantes ya han publicado aquí el link:  <a href="1Retos.php">Retos</a></p>
		  
        </div><!-- /.col-lg-4 -->
		
		<div class="columna6">
          <img class="img-circle" src="" alt="Generic placeholder image" style="width: 1px; height: 1px;">
          <h2>Regístrate en los eventos</h2>
          <p> Por esta página enlistaremos los eventos que se piensan llevar a cabo en la
			universidad, a los cuales por este medio te podrás registrar en el que te
			interese llenando los respectivos datos que pidan. En caso quieras mirar los
			eventos aquí el link: <a href="1Torneo.php">Torneos</a></p>
		  
        </div><!-- /.col-lg-4 -->
		
		 
	 </div>  <!-- fin FiLa-->
     <div class="FiLa">
	 <div class="columna6">
          <img class="img-circle" src="" alt="Generic placeholder image" style="width: 1px; height: 1px;">
          <h2> Contacta los encargados </h2>
          <p> 
            Por este medio podrás ver información relacionada con los datos del
			personal que elabora en el área deportiva y los encargados del
			proyecto:  <a href="AcercaDe.php">AcercaDe</a></p>
		  
		  
        </div><!-- /.col-lg-4 -->
	 
	 <div class="columna6">
          <img class="img-circle" src="" alt="Generic placeholder image" style="width: 1px; height: 1px;">
          <h2> Historial  </h2>
          <p> 		  	  	   
            Quieres recordar todos los momentos en los que has sido parte de nuestra
			actividad, te gustaría ver tu historial con respecto a las participaciones
			de las cuales has sido parte, entonces éntrale al historial página en la cual
			podrás ver una lista de todas las actividades de las cuales has sido parte.
           Solo necesitas estar registrado he iniciar sesión aquí el link:
           <a href="1Historial.php">Historial</a></p>
		  
        </div><!-- /.col-lg-4 -->
	 </div>
    
	 
        
      </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="txtok.js"></script> 
	    
        <script type="text/javascript">
            $(document).ready(function () {
                $('ul.sf-menu').sooperfish();
                $('.top').click(function () { $('html, body').animate({ scrollTop: 0 }, 'fast'); return false; });
            });
                </script>

      <hr class="featurette-divider">

        <div id="Pie">
                 <p class="pull-right"><a href="#">subir!!</a></p>
                <span> &copy; 2014 - Solicitud para reservación de canchas del polideportivo
				<br><li><a href="1salir.php">Salir</a></li></span>             
             </div>
     

    </div><!-- /.contenedor -->


       
	<script src="Scripts/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
	<!-- PHP-->
    <!-- PHP -->
			
  </body>
</html>
