<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="estilos.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="ic_launcher.png">
<link href="estilos.css" type="text/css" rel="stylesheet" />
    <title>Historial | Polideportivo</title>

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
                <li ><a href="1loggin.php">Login</a></li>
                <li><a href="1Principal.php">Inicio</a></li>
                <li> <a href="1Registro.php"> Registro </a></li>
                <li><a href="1Reservacion.php">Reservación</a></li>
                <li><a href="1Retos.php">Retos</a></li>
                <li><a href="1Torneo.php">Torneo</a></li>
				
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca de <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
				    <li class="active"><a href="AcercaDe.php">AcercaDe</a></li>
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
        <div class="columna2">
          <img class="img-circle" src="" alt="Generic placeholder image" style="width: 1px; height: 1px;">
          <h2></h2>
          <p></p>
          <p><a href="1Reservacion.php" role="button"></a></p>
        </div><!-- /.col-lg-4 -->
        <div class="FiLa featurette">
        <div class="columna7">
          
		  
		    
   <article class="contact">
	  <h2>Historial</h2>
   
   <section class="contact">
        <header>
            <h3>Reservaciones:</h3>
        </header>
	
	<p>Por este medio podras ver tu historial<br> en sentido
	a todas las veces que ha solicitado cancha al polideportivo.</p>
	 
	 <br><br>
	 <table class="table">
		 
		    <tr>
		     <th>Cancha</th>
			 <th>Fecha-Hora</th>
		     
			 <th> Estado </th>
		    </tr>
	<?php  
	  $conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
	  mysql_select_db("ceutec",$conexion) or//a8060626_12
      die("Problemas en la selección de la base de datos");
      $clavebuscada=mysql_query("select IdCancha,FechaHoraSolicitud,HoraReservacion,FechaReservacion,Estado from reservacioncancha where IdEstudiante='$_SESSION[cuenta]'",$conexion) or
      die("Problemas en el select:".mysql_error());
           $estado="";
           /*if ($row['IdEstadoReservacion']==1)
		   {$estado="Disponible";}
		   if ($row['IdEstadoReservacion']==2)
		   {$estado="Reservado";}
		   if ($row['IdEstadoReservacion']==3)
		   {$estado="Pendiente";}*/
      while($row = mysql_fetch_array($clavebuscada))
      {
	  //aqui vas a buscar el idcancha pa poner el nombre en estado solo pones if 3 = pendiente 2 = reservado y los otros 
	  //pa mostrsr
	   $clavebuscada2=mysql_query("select Descripcion from canchas where IdCancha='$row[IdCancha]'",$conexion) or
      die("Problemas en el select:".mysql_error());
	  while($row2 = mysql_fetch_array($clavebuscada2))
      {
	  
         $row['cancha'];
		  $rr="";
		 if($_SESSION['Ucarrera']==""){$rr= "disabled";}
		
		echo'<form action="#" method="post">
		        <tr>
			     <td> <input type="text" value="'.$row2['Descripcion'].'" id="cancha" name="cancha" readonly="readonly"> </td>
				<td> <input type="text" value="'.$row['FechaReservacion']."-".$row['HoraReservacion'].'" id="hora" name="hora" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['Estado'].'" id="estado" name="estado" readonly="readonly"></td>
			  </tr>
			 </form>';
		
		 }//fin while row2
         
		 }//fin while row
	
	
	
	
	?> </table>
	 </section>
	  <section class="contact">
        <header>
           <br><br><br><br><br><br><br><br><br> <h3>Torneos:</h3>
        </header>
	<p>Por este medio podras ver tu historial<br> en sentido
	a todos las veces que ha asistido a los torneos del polideportivo.</p>
	 
	 <br><br>
	 <table class="table">
		 
		    <tr>
		     <th>Torneo</th>
			 <th>Grupo</th>
		     <th>Fecha</th>
			
		    </tr>
	<?php  
	$conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
	  mysql_select_db("ceutec",$conexion) or//a8060626_12
      die("Problemas en la selección de la base de datos");
	
	/**/
	 $clavebuscada=mysql_query("select NombreEquipo from Equipos where cuenta='$_SESSION[cuenta]'",$conexion) or
      die("Problemas en el select:".mysql_error());


      while($row2 = mysql_fetch_array($clavebuscada))
      {
	    $GR=$row2['NombreEquipo'];
	  /*-------------------------------------------------*/
	    $clavebuscadaaa=mysql_query("select id,torneo,grupo,fecha from gt where grupo='$GR'",$conexion) or
      die("Problemas en el select gr:".mysql_error());


      while($row = mysql_fetch_array($clavebuscadaaa))
      {
        
		 if($_SESSION['Ucarrera']==""){$rr= "disabled";}
		
		echo'<form action="#" method="post">
		       <input type="hidden" value="'.$row['id'].'" name="ID" id="ID">
			   <input type="hidden" value="'.$row['numerocuenta'].'" name="NMC" id="NMC">
   		      <tr>
			     <td> <input type="text" value="'.$row['torneo'].'" id="cancha" name="cancha" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['grupo'].'" id="Calendario" name="Calendario" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['fecha'].'" id="hora" name="hora" readonly="readonly"> </td>
				 
			  </tr>
			 </form>';
		
		 
         
		 }
	  /*-------------------------------------*/
	  }
	/**/
	
	  
    
	
	
	
	
	?> </table>
						
	<div id="msj"></div>
	<br>
	<div id="msj2"><?php if($_SESSION['Ucarrera']==""){echo "Para ver tu historial Nesecitas iniciar sesion"; } ?></div>
	
    </section>
	<br><br><br><br>
   <p>Esperamos que sigas participando</p>
   
   </article>
		              	 
        
	
		
		</div>
       
      </div>


	 
      </div><!-- /.FiLa -->


     
        
      </div>

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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script src="txtok.js"></script>
	  <script src="Scripts/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
	<!-- PHP-->
	
			
  </body>
</html>
