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
    <title>Retos | Polideportivo</title>

    <!-- Bootstrap core CSS -->
      <link href="Content/bootstrap.min.css" rel="stylesheet" />
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
<?php

//Creando conexion
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
//seleccionando base
mysql_select_db("ceutec",$conexion) or die("Problemas en la selección de la base de datos");


      $hoydia = date("d")+0-1+1;

      $hoymes = date("m")+0-1+1;

      $hoyanyo = date("y")-1+1;
      $hoyanyo=$hoyanyo+2000;
         $Ff=date("Y-m-d"); 
       
         $clavebuscadah=mysql_query("DELETE FROM reto WHERE fecha<='$Ff'",$conexion) or
         die("Problemas en el delete1:".mysql_error());
		 
		 //$clavebuscadah=mysql_query("DELETE FROM reto WHERE anyo<'$hoyanyo'",$conexion) or
         //die("Problemas en el delete1:".mysql_error());
?>  
    <div class="navbar-wrapper">
      <div class="container">          
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
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
                <li ><a href="1loggin.php">Login</a></li>
                <li><a href="1Principal.php">Inicio</a></li>
                <li> <a href="1Registro.php"> Registro </a></li>
                <li><a href="1Reservacion.php">Reservación</a></li>
                <li class="active"> <a href="1Retos.php">Retos</a></li>
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">        
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
            <img src="Imagenes/jaguares1.png" alt="First slide"/>
          <div class="container">
            <div class="carousel-caption">
              <h1>Solicitud para Reservación de Cancha</h1>
              <p>Bienvenido: Desde ésta app web podrás enviar una solicitud pidiendo una reservación de cualquiera de las canchas del polideportivo de ceutec.</p>
              <p><a class="btn btn-lg btn-primary" href="1Registro.php" role="button">Registrate ahora</a></p>
            </div>
          </div>
        </div>

        <div class="item">
            <img src="Imagenes/95088-cl_12_09_hacienda-tobalaba_fs_-thumb.jpg" alt="Second slide"/>
          <div class="container">
            <div class="carousel-caption">
              <h1>Futbolito</h1>
              <p>¿Te gusta el fútbol? ¿Crees que tienes lo necesario para salir campeón con tu equipo?... Entonces ven y demuéstralo en este espectacular torneo!!!, registra tu equipo y participa en el más glorioso de los torneos, no te arrepentiras, ¿Qué esperas?</p>
            </div>
          </div>
        </div>

        <div class="item">
            <img src="Imagenes/1776859.jpg" alt="Third slide"/>
          <div class="container">
            <div class="carousel-caption">
              <h1>Voleibol</h1>
              <p>¿Sabias que Ceutec tiene un equipo de Voleibol ? Si te gustaria unirte avócate  con el encargado del polideportivo.</p>
            </div>
          </div>
        </div>

        <div class="item">
            <img src="Imagenes/basketball120206_560.jpg" alt="Fourth slide"/>
          <div class="container">
            <div class="carousel-caption">
              <h1>Baloncesto</h1>
            <p>El Baloncesto es tu refugio, o tu santuario?
		         Vuelve a ser un niño en el patio. 
		         Porque cuando llega el partido, todo es bueno.</p>
            </div>
          </div>
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


    
	  
	  
	  
	  <!-- Moviendo-->
	    <div class="container marketing">
   
      <div class="row">
       
	   <div class="row featurette">
        <div class="col-sm-7 col-md-7 col-lg-7">
          <h2 class="featurette-heading">Formulario de registro</h2>
          <p class="lead">
		  Por este medio te podrás registrar en el torneo que te interese
         llenando al menos 8 participantes con sus respectivos datos,
		 junto al nombre del grupo.	   
		  </p>
		  
				  
		  <!-- -->
		 	 	  <article class="contact">
	  <!-- -->
		 
		 <section class="contact">
	  <form action="1Torneo.php" method="post" class="tbb" id="tbb">
            
                        <ol>
                 
		 <table class="tb2" id="tb2" style="width:6%; border-spacing:1; ">
		 
		    <tr>
		     <th>No.</th>
		     <th>Nombre</th>
		     <th>No. de cuenta</th>
			 <th>Telefono</th>
			 <th>Correo</th>
			 <th>Carrera</th>
		    </tr>
			
			<!--Alumno1 -->
            <tr>
			  <td> 1 </td>
			  <td> <input type="text" name="nombre1" id="nombre1" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta1" id="cuenta1" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono1" id="telefono1" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo1" id="correo1" placeholder="Correo"> </td>
			  <td> <select name="Carrera1" id="Carrera1" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno2 -->
            <tr>
			  <td> 2 </td>
			  <td> <input type="text" name="nombre2" id="nombre2" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta2" id="cuenta2" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono2" id="telefono2" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo2" id="correo2" placeholder="Correo"> </td>
			  <td> <select name="Carrera2" id="Carrera2" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno3 -->
            <tr>
			  <td> 3 </td>
			  <td> <input type="text" name="nombre3" id="nombre3" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta3" id="cuenta3" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono3" id="telefono3" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo3" id="correo3" placeholder="Correo"> </td>
			  <td> <select name="Carrera3" id="Carrera3" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno4 -->
            <tr>
			  <td> 4 </td>
			  <td> <input type="text" name="nombre4" id="nombre4" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta4" id="cuenta4" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono4" id="telefono4" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo4" id="correo4" placeholder="Correo"> </td>
			  <td> <select name="Carrera4" id="Carrera4" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			
			<!--Alumno5 -->
            <tr>
			  <td> 5 </td>
			  <td> <input type="text" name="nombre5" id="nombre5" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta5" id="cuenta5" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono5" id="telefono5" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo5" id="correo5" placeholder="Correo"> </td>
			  <td> <select name="Carrera5" id="Carrera5" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno6 -->
            <tr>
			  <td> 6 </td>
			  <td> <input type="text" name="nombre6" id="nombre6" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta6" id="cuenta6" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono6" id="telefono6" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo6" id="correo6" placeholder="Correo"> </td>
			  <td> <select name="Carrera6" id="Carrera6" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno7 -->
            <tr>
			  <td> 7 </td>
			  <td> <input type="text" name="nombre7" id="nombre7" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta7" id="cuenta7" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono7" id="telefono7" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo7" id="correo7" placeholder="Correo"> </td>
			  <td> <select name="Carrera7" id="Carrera7" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			
			<!--Alumno8 -->
            <tr>
			  <td> 8 </td>
			  <td> <input type="text" name="nombre8" id="nombre8" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta8" id="cuenta8" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono8" id="telefono8" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo8" id="correo8" placeholder="Correo"> </td>
			  <td> <select name="Carrera8" id="Carrera8" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			
			<!--Alumno9 -->
            <tr>
			  <td> 9 </td>
			  <td> <input type="text" name="nombre9" id="nombre9" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta9" id="cuenta9" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono9" id="telefono9" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo9" id="correo9" placeholder="Correo"> </td>
			  <td> <select name="Carrera9" id="Carrera9" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno10 -->
            <tr>
			  <td> 10 </td>
			  <td> <input type="text" name="nombre10" id="nombre10" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta10" id="cuenta10" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono10" id="telefono10" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo10" id="correo10" placeholder="Correo"> </td>
			  <td> <select name="Carrera10" id="Carrera10" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno11 -->
            <tr>
			  <td> 11 </td>
			  <td> <input type="text" name="nombre11" id="nombre11" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta11" id="cuenta11" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono11" id="telefono11" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo11" id="correo11" placeholder="Correo"> </td>
			  <td> <select name="Carrera11" id="Carrera11" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			
			<!--Alumno12 -->
            <tr>
			  <td> 12 </td>
			  <td> <input type="text" name="nombre12" id="nombre12" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta12" id="cuenta12" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono12" id="telefono12" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo12" id="correo12" placeholder="Correo"> </td>
			  <td> <select name="Carrera12" id="Carrera12" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			<tr>Nombre del Grupo: <input type="text" name="grupo" id="grupo" value="" placeholder="Nombre del Grupo"><br></tr>
			<tr>Torneo:
			<?php 
			//mysql17.000webhost.com","a8060626_12","cdfn33
            $conexion=mysql_connect("db4free.net","ceutec","ceutec") or
            die("Problemas en la conexion");
            mysql_select_db("ceutec",$conexion) or//a8060626_12
           die("Problemas en la selección de la base de datos");

          $clavebuscada=mysql_query("select nombre from torneo",$conexion) or
            die("Problemas en el select:".mysql_error());
           echo "<select name='torneos' id='torneos'>";
		   while($row = mysql_fetch_array($clavebuscada))
           { echo "<option value='".$row['nombre']."'>".$row['nombre']."</option>";
              
                         }echo "</select>";

			?>
			<p><input type="submit" value="Registrarse" <?php if($_SESSION['Ucarrera']==""){echo "disabled";} ?>></p>
			<br><br></tr>

			</table>

		 </ol>

		
                        </form></section>
						<div id="msj" name="msj"></div>
						<div id="msj2"><?php if($_SESSION['Ucarrera']==""){echo "Por seguridad, para hacer registrar tu grupo nesecitas iniciar sesion"; } ?></div>
                    </article><br>
		  <!-- -->
		  
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
          
		  <img class="featurette-image img-responsive" src="http://www.enantenaradio.com/fs_files/user_img/ICO_deportes.gif" alt="Generic placeholder image"/>
      
		<header>
            <h3>Torneos:</h3>
        </header>
        <p>        
          Por esta página enlistaremos los eventos que se piensan llevar a cabo en la
         universidad:
		   </p>
		<br>
	
		   <table class="table"> 
		 
		    <tr>
		     <th>Nombre</th>
			 <th>Periodo</th>
			 <th>Tipo</th>
			 <th>Año</th>
		    </tr>
			
			<?php  
	  $conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
	  mysql_select_db("ceutec",$conexion) or//a8060626_12
      die("Problemas en la selección de la base de datos");
      $clavebuscada=mysql_query("select nombre,periodo,tipo,year from torneo",$conexion) or
      die("Problemas en el select nombre,fecha,tipo,year torneo:".mysql_error());


      while($row = mysql_fetch_array($clavebuscada))//while1
      {
	   
	   
	   echo "<tr><td>".$row['nombre']."</td>";
       echo "<td>".$row['periodo']."</td>";
       echo "<td>".$row['tipo']."</td>";	  
       echo "<td>".$row['year']."</td></tr>";		  
         
		 }//fin row1
	
	
	
	
	?>
			
		  </table>
		
		------
		   
		  <article class="">
	   </p>
	 

						
						
				
						
                    </article>
		 
		 
		
		
		</div>
		
		
		
		
		
      </div>
	   
       

	 
      </div><!-- /.row -->


     
        
      </div>
	  <!-- fin moviendo-->
	  
	  
	  

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
     

    </div><!-- /.container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="Scripts/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
	<!-- PHP-->

<!-- Inicio php insert -->

<?php
function ingresar_reto() {



//Creando conexion
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
//seleccionando base
mysql_select_db("ceutec",$conexion) or die("Problemas en la selección de la base de datos");

//insertando datos de la base de datos 
list($anio, $mes, $dia) = explode("-",$_REQUEST[Calendario]); $Ff=date("Y-m-d"); 
$clavebuscadah=mysql_query("insert into reto(numerocuenta,cancha,periodo,anyo,mes,dia,fecha) values ('$_SESSION[cuenta]','$_REQUEST[Cancha]','$_REQUEST[hora]','$anio','$mes','$dia','$_REQUEST[Calendario]')",$conexion) or
die("Problemas en el select2:".mysql_error());
echo '<script>document.getElementById("msj").innerHTML = "Reto ingresado pronto obtendras un rival.";</script>';	
}
//------------------------------------------------------
function aceptar_reto() {


/*iniciooooooooooooo rrrrrrrrrrrettttttttttoooooooooooooooo*/

list($anio, $mes, $dia) = explode("/",$_REQUEST[Calendario]); 
//echo "Año: $anio <br />"; 
//echo "Mes: $mes <br />"; 
//echo "Dia: $dia <br />"; 


$hoydia = date("d");
//echo "1:".$hoydia;

$hoymes = date("m");
//echo "<br>2:".$hoy2;

$hoyanyo = date("y");
//echo "<br>3:".$hoy3;

  // if( (Int)$anio>=(Int)$hoyanyo and (Int)$mes>=(Int)$hoymes and (Int)$dia> (Int)$hoydia)
    // {
      //en caso que la fecha sea aceptable en el sentido que no es del mismo dia
	  //ni es una fecha anterioir a la actual pasara a comprobar que la fecha no
	  //este solicitada por nadie para pasar a guardar los datos y asi que a el 
	  //encaaaaargado del area se le envie un correo avisandole para q entre
	 
	 
	 //-------------------------------------select----------------------
	 
	 //mysql17.000webhost.com","a8060626_12","cdfn33
	 //"db4free.net","ceutec","ceutec"
       $conexion=mysql_connect("db4free.net","ceutec","ceutec") or
       die("Problemas en la conexion");

         mysql_select_db("ceutec",$conexion) or//a8060626_12
         die("Problemas en la selección de la base de datos");

$clavebuscada=mysql_query("select anyo,mes,dia,hora from solicitud where anyo = '$anio' and mes = '$mes' and dia = '$dia' and hora = '$_REQUEST[periodo]'",$conexion) or
  die("Problemas en el select:".mysql_error());


 //echo "<br>antes del whil:----------------------------------------";
  session_start();
  
 while($row = mysql_fetch_array($clavebuscada))
  {
  
  
  
  
  $Anyobd = $row['anyo'];
  
  $Mesbd = $row['mes'];
  $Diabd = $row['dia'];
  $Horabd = $row['hora'];

  
  
  
  

  }
          //if para verificar que la hora no aiga sido solicitada
	 
	    	  //pppppppppppporrrrrrrrrrrrrr aqu ivas aqui ingresarias los datos a los de solicitud
             // y enviareas el mensaje avisando


            //------------regustro-envio-------------------------------
			
//$registros=mysql_query("insert into solicitud(numerocuenta,anyo,mes,dia,hora,estado,cancha,numerocuenta2) values ('$_SESSION[cuenta]','$anio','$mes','$dia','$_REQUEST[periodo]','pendiente','$_REQUEST[Cancha]','$_REQUEST[NMC]')",$conexion) or
  //die("Problemas Registrando datos en temp:".mysql_error());
  #punciona ;) 3 hora en eto
  
  //--
//  $FechaHoraSolicitud="".$_REQUEST[Calendario]." ".$_REQUEST[periodoa];
 // $hoyhora=date("h");$FhoY="".$hoyanyo."-".$hoymes."-".$hoydia;
 
$hoyhora2=date('m/d/y h:i:s A');
$FhoY="".$hoymes."/".$hoydia."/".$hoyanyo;
//en los value de hora pone h.00.00 pm
//dia actual en el q lo ase
$FechaHoraSolicitud=$Fhoy." ".$hoyhora2;
 $registros=mysql_query("insert into reservacioncancha(FechaHoraSolicitud,IdEstudiante,Estado,HoraReservacion,FechaReservacion,IdCancha,IdEstudiante2) values ('$FechaHoraSolicitud','$_REQUEST[NMC]','Pendiente','$_REQUEST[periodoa]','$_REQUEST[Calendario]','$_REQUEST[ID]','$_SESSION[cuenta]')",$conexion) or
  die("Problemas Registrando datos en reservacioncancha:".mysql_error());
  
  /*
                <input type="hidden" value="'.$row['id'].'" name="ID" id="ID">
			   <input type="hidden" value="'.$row['numerocuenta'].'" name="NMC" id="NMC">
   		      <tr>
			     <td> <input type="text" value="'.$roww.'" id="canchaaa" name="canchaaa" readonly="readonly"></td>
			     <td> <input type="text" value="'.$row['anyo'].'-'.$row['mes'].'-'.$row['dia'].'" id="Calendario" name="Calendario" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['periodo'].'" id="periodo" name="periodo" readonly="readonly"> </td>
				 <td> <input type="submit" name="Retar" value="Retar" '.$rr.' > </td>
  */
  //--



  /*INICIAMOS EL CODIGO PHP*/
$header="From: AREA DEPORTIVA:<".$_SESSION[Ucorreo].">\n";
/*CREAMOS UN HEADER DONDE DEFINIMOS EL REMITENTE DEL CORREO,
ESTO LO ASIGNAMOS A LA VARIABLE $header*/
$header.="MIME-Version: 1.0\n";
$header.="Content-type: text/html; charset=iso-8859-1";
/*CONTINUAMOS EL HEADER (NOTESE EL ".=" EN VEZ DE SOLO "="),
DEFINIDIENDO AHORA, QUE EL CORREO SE ENVIARA EN FORMATO HTML.
ESTO TAMBIEN LO ASIGNAMOS A LA VARIABLE $header*/
$msj="El alumno:".$_SESSION[Unombre]." con el numero de cuenta".$_SESSION[cuenta]."
      <br>acepto el reto establecido por el estudiante con el numero ce cuenta".$_REQUEST[NMC]."
	   ambos estudiantes le enviaron una solicitud sobre una reservacion de cancha, se espera su entrada
	  <br>para verificar la solicitud";
//$msj.="<br><a href='www.comolohago.cl'>Click</a>";
/*CREAMOS EL MENSAJE (NOTESE NUEVAMENTE EL ".=") QUE IRA EN EL CORREO
Y LO ASIGNAMOS A LA VARIABLE $msj*/
//aqui iria el coreeo
$dest="Felixramirez"."@unitec.edu";
/*ASIGNAMOS A LA VARIABLE $dest EL CORREO AL QUE ENVIAREMOS EL CORREO
LAS PRUEBAS DEBEN HACERSE CON UN CORREO REAL*/
$asunto="Confirmacion de registro";
/* EN LA VARIABLE $asunto GUARDAMOS EL ASUNTO DEL MENSAJE*/
mail($dest,$asunto,$msj,$header);
/*EJECUTAMOS LA FUNCION COMO TAL, EL ORDEN ES IMPORTANTE ASI QUE SE DEBE MANTENER,
USAMOS LAS VARIABLES QUE ASIGNAMOS ANTERIORMENTE*/
//echo "Mensake enviado";
  
  echo '<script>document.getElementById("msj").innerHTML = "Se le a enviado un mensaje de<br>de solicitud al encargado.";</script>'; 
  //echo '<script> alert("Se le a enviado un mensaje de<br>de solicitud al encargado.");</script>';
			//----------fin registro envio

		list($anio, $mes, $dia) = explode("-",$_REQUEST[Calendario]); 
$clavebuscadah=mysql_query("delete from reto where id='$_REQUEST[IDD]'",$conexion) or
die("Problemas en el delete1:".mysql_error());	 
	 
	
	 
	 
	 //-------------------------------fin select------------------------

        
   
$anio="";
$mes="";
$dia="";

/*ffffffffffiiiiiiiiinaaaaaaaalllllll retttttttttttto*/

}//----------------------------------------------------------FIN funcion aceptar e iongresar reto


list($anio, $mes, $dia) = explode("-",$_REQUEST[Calendario]); 
//echo "Año: $anio <br />"; 
//echo "Mes: $mes <br />"; 
//echo "Dia: $dia <br />"; 


$hoydia = date("d");
//echo "1:".$hoydia;

$hoymes = date("m");
//echo "<br>2:".$hoy2;

$hoyanyo = date("y");
//echo "<br>3:".$hoy3;

    
   $Ff=date("Y-m-d");  

if($_REQUEST[Cancha]!="" and $_REQUEST[hora]!="" and (Int)$anio>=(Int)$hoyanyo and (Int)$mes>=(Int)$hoymes and $_REQUEST[Calendario]>$Ff){


//---------------------------------------------////////-------------------------Cancha Calendario != hr
 if($_REQUEST[Cancha]!="hr" and $_REQUEST[Calendario]!="hr" and $_REQUEST[Cancha]!="" and $_REQUEST[Calendario]!=""){
 $inserR = $_POST['ireto'];
if ($inserR) {ingresar_reto();}
                                                }
												else
												{
												
	 echo '<script>document.getElementById("msj").innerHTML = "Datos incorrectos.";</script>';
	 echo '<script>document.getElementById("Cancha").value = "'.$_REQUEST[Cancha].'";</script>';
     echo '<script>document.getElementById("hora").value = "'.$_REQUEST[hora].'";</script>';
	 echo '<script>document.getElementById("Calendario").value = "'.$_REQUEST[Calendario].'";</script>';					
												}

}
else
    {    
	
	
	// echo '<script>document.getElementById("msj").innerHTML = "Datos incorrectos2.";</script>';
	 echo '<script>document.getElementById("Cancha").value = "hr";</script>';
     echo '<script>document.getElementById("hora").value = "hr";</script>';
	 echo '<script>document.getElementById("Calendario").value = "'.$_REQUEST[Calendario].'";</script>';
	
					 }
					 
					 
					  $retarr = $_POST['Retar'];
                      if ($retarr) {aceptar_reto();}


 ?>

<!-- Fin php insert -->
<!-- Fin php loggin -->
			
  </body>
</html>
