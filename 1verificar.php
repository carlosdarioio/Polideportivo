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
    <title>Verificando datos | Polideportivo</title>

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
        <div class="columna4">
          <img class="img-circle" src="" alt="Generic placeholder image" style="width: 1px; height: 1px;">
          <h2></h2>
          <p></p>
          <p><a href="1Reservacion.php" role="button"></a></p>
        </div><!-- /.col-lg-4 -->
       

	   <div class="columna5">
            <!-- ------------------- -->
   <article class="contact">
	  <h1>Verificando datos</h1>
   
   <section class="contact">
        <header>
            <h3> <legend>Formulario de registro</legend></h3>
        </header>
	  
	  <form action="1verificar.php" method="post">
                       
                        <ol>A continuacion llenar los datos:
                            
                             <li>
                                Numero de Cuenta<br>
                                <input type="text" id="NmCuenta" placeholder="Numero de cuenta" name="NmCuenta" required="true">
                                
                            </li>							
                          
							<li>
							
                            Numero de verificacion:<br>
                            <input type="Password" id="mmm" placeholder="Numero de verificacion" name="mmm" required="true">
                                
                            </li>
     
                           
						  
							
                        </ol>
						<input type="submit" value="Registrarse">
                        </form></section>
						<div id="msj"></div>
						
						
                    </article>
             <!---- --------------->
		  </div><!-- /.col-lg-4 -->
        
		<div class="columna4">
          <img class="img-circle" src="" alt="Generic placeholder image" style="width: 1px; height: 1px;">
          <h2></h2>
          <p></p>
          <p><a href="1Reservacion.php" role="button"></a></p>
        </div><!-- /.col-lg-4 -->
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
	<?php 
if( $_REQUEST[NmCuenta]!="" and $_REQUEST[mmm]!="" ){

$conexion=mysql_connect("db4free.net","ceutec","ceutec") or
 die("Problemas en la conexion");
mysql_select_db("ceutec",$conexion) or
  die("Problemas en la selección de la base de datos");
  $registros=mysql_query("select nombret,apellidot,telefonot,contrat,numerocuentat,carrerat,correot,num from temp where numerocuentat='$_REQUEST[NmCuenta]' and num='$_REQUEST[mmm]'",$conexion) or
  die("Problemas en el select1:".mysql_error());
  
  #
    while($row = mysql_fetch_array($registros))
  {
  $n=$row['nick'];
 // nombret,contrat,numerocuentat,carrerat,correot,num
   $nombr=$row['nombret'];
   $nombr2=$row['apellidot'];
   $contr=$row['contrat'];
   $numerocuent=$row['numerocuentat'];
   $carrer=$row['carrerat'];
   $corre=$row['correot'];
   $nu=$row['num'];
   $telefono=$row['telefonot'];
  
 }
  #
  
  
  
$nu2="".$_REQUEST[mmm];
  
  
  if($numerocuent==$_REQUEST[NmCuenta] and $nu == $nu2){

  $registros=mysql_query("insert into estudiantes(Nombre,Apellido,Telefono,Contra,IdEstudiante,Carrera,Correo) values ('$nombr','$nombr2','$telefono','$contr',$numerocuent,'$carrer','$corre')",$conexion) or
  die("Problemas Registrando datos en base:".mysql_error());
  #punciona ;) 3 hora en eto
  
   $registros=mysql_query("delete from temp where numerocuentat='$numerocuent' and num='$nu'",$conexion) or
  die("Problemas en el delete:".mysql_error());
  
//  echo "<script>alert('Correcto ya estas registrado, inicia sesion');</script>";
   echo '<script>document.getElementById("msj").innerHTML = "Felicidades se ha registrado!";</script>'; 
  }
  else{
//  echo '<script>alert("NOTA:Datos incorrectos.");</script>';
          echo '<script>document.getElementById("msj").innerHTML = "NOTA:Datos incorrectos.";</script>'; 
//          echo "Nombre de usuario o contrasenya incorrecta";
		 // echo "nu: ".$nu." nu2:".$nu2." numerocuent:".$numerocuent." requtes[NmCuenta:]".$_REQUEST[NmCuenta];
	  }
  
  
  } else {
  //echo "Error";
  
  if( $_REQUEST[NmCuenta]!="" or $_REQUEST[mmm]!="" ){
   echo '<script>document.getElementById("msj").innerHTML = "NOTA: Introducir todos los datos.";</script>'; 
  
        if( $_REQUEST[NmCuenta]!="")
		{
		 echo '<script>document.getElementById("NmCuenta").value = "'.$_REQUEST[NmCuenta].'";</script>';
		}
		
		if( $_REQUEST[mmm]!="")
		{
		 echo '<script>document.getElementById("mmm").value = "'.$_REQUEST[mmm].'";</script>';
		}
  
                 }
				 
	

 }

  
  
  
  
  
//mysql_close($conexion);
  
  ?>

<!-- Fin php loggin -->
  </body>
</html>
