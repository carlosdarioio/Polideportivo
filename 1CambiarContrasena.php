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
    <title>Cambiar Contraseña | Polideportivo</title>

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
                <li class="active"><a href="1loggin.php">Login</a></li>
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
	  <h1>Cambiar Contraseña</h1>
   
   <section class="contact">
        <header>
            <h3></h3>
        </header>
        Ingrese numero de cuenta y correo.
                
              
                   
					<form action="1CambiarContrasena.php" method="post">
                    <ol>
                        <li>
						
                           Numero de cuenta
						   <br><input type="text" id="NumeroCuenta" name="NumeroCuenta" placeholder="Numero de cuenta" required="true">
                        </li>
                        <li>
                            Contraseña actual
                            <br><input type="password" id="correo" name="correo" placeholder="Contraseña" required="true">
                        </li>
						
						<li>
                            Contraseña nueva
                            <br><input type="password" id="correo2" name="correo2" placeholder="Contraseña" required="true">
                        </li>
                        
                    </ol>
					<input type="submit" id="Login" value="Cambiar">
			
					</form>
					<div id="msj"></div><br><br>
               
           
      
        <p>
            <a href="1Registro.php">Registrate </a>en caso no tengas cuenta.
        </p>
		<br><br><br>
		<p>
            <a href="1RestablecerContrasena.php">Restablecer contraseña.</a>
        </p><br><br>
		 <p>
            <a href="1loggin.php">Loggin.</a>
        </p>
    </section>
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


<?php
//------------------------------------------------------------------------------------
//echo "entraaaaaanooooooooooooooooooa<br>";


if($_REQUEST[NumeroCuenta]=="" and $_REQUEST[correo]=="" and $_REQUEST[correo2]==""){
      
	 // if($_REQUEST[NumeroCuenta]=="" or $_REQUEST[correo]==""){
//echo '<script>document.getElementById("msj").innerHTML = "Introducir todos los datos.";</script>';
 echo '<script>document.getElementById("NumeroCuenta").value = "'.$_REQUEST[NumeroCuenta].'";</script>';
  
 // }
  
}else{

if(is_numeric($_REQUEST[NumeroCuenta])){

//mysql17.000webhost.com","a8060626_12","cdfn33
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or
 die("Problemas en la conexion");

mysql_select_db("ceutec",$conexion) or//a8060626_12
  die("Problemas en la selección de la base de datos");
$CCC=$_REQUEST[correo];
$clavebuscada=mysql_query("select  IdEstudiante,contra from estudiantes where IdEstudiante = $_REQUEST[NumeroCuenta] and contra='$CCC'",$conexion) or
  die("Problemas en el select:".mysql_error());

$CCC=$_REQUEST[correo];
//echo "ccc ".$CCC;
//echo " Cuenta ".$_REQUEST[NumeroCuenta];
 //echo "<br>antes del whil:----------------------------------------";
 
  $NMC="";
  $CRR="";
 while($row = mysql_fetch_array($clavebuscada))
  {
  
  
  
  
  $NMC = $row['IdEstudiante'];
  
  
  $CRR = $row['contra'];
  
  
  

  }
  
 //echo "<br> despues del whilw............................";


//echo "<br>nmc ".$NMC;
//echo " crr".$CRR;
  
if( $NMC==$_REQUEST[NumeroCuenta] and $CRR==$_REQUEST[correo]){  
//echo '<script>alert("As iniciado sesion correctamente");</script>';
 $numeroAleatorio = rand(0,10000);


$clavebuscada=mysql_query("Update estudiantes SET contra = '$_REQUEST[correo2]' where IdEstudiante = $_REQUEST[NumeroCuenta] and contra='$CRR'",$conexion) or
  die("Problemas en el select:".mysql_error());




$header="From: AREA DEPORTIVA:<$_REQUEST[Email]>\n";
$header.="MIME-Version: 1.0\n";
$header.="Content-type: text/html; charset=iso-8859-1";
$msj="Por este mensaje le avisamos que efectuo un cambio de contraseña<br>
      se le avisa que su nueva contraseña es esta:<br>
	  <br>Contraseña:".$_REQUEST[correo2]."
	  <br>Gracias por actualizar su contraseña.
	  <br><br><a href='http://appletenhtml.comule.com/polideportivo/loggin.php'>Ya puedes iniciar sesion</a>
	  <br>Te esperamos en el polideportivo<br><h1>SALUDOS!</h1>";
$dest=$_REQUEST[Email]."@unitec.edu";
$asunto="Cambio de contraseña";
mail($dest,$asunto,$msj,$header);
  
  
  

echo '<script>document.getElementById("msj").innerHTML = "As cambiado tu contraseña con exito.";</script>';
                            

							
							
							
							
							}else{
//						echo '<script>alert("Usuario o contraseña incorrecto");</script>';
                        echo '<script>document.getElementById("msj").innerHTML = "Usuario o contraseña incorrecto.";</script>';						
						$_SESSION['cuenta']="";
							 }

mysql_close($conexion);


}else{

 echo '<script>document.getElementById("msj").innerHTML = "NOTA:Error Introdujo mal el numero de cuenta.";</script>'; 
     echo '<script>document.getElementById("NumeroCuenta").value = "'.$_REQUEST[NumeroCuenta].'";</script>';
     
     
}//fin numeric


}


//-----------------------------------------------------------------------------------
 ?>
<!-- Fin php loggin -->
     
        
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
	

<!-- Fin php loggin -->
  </body>
</html>
