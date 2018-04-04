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
    <title>Registro | Polideportivo</title>

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
                <li class="active"> <a href="1Registro.php"> Registro </a></li>
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
		   <img class="img-circle" src="Imagenes/huella.png" alt="Generic placeholder image" style="width: 102px; height: 140px;">
         
          <h2></h2>
          <p></p>
          <p><a href="1Reservacion.php" role="button"></a></p>
        </div><!-- /.col-lg-4 -->
       

	   <div class="columna4">
         
		    <article class="contact">
	  
	  <section class="contact">
	  <form action="1Registro.php" method="post">
                        <legend><h2>Formulario de registro</h2></legend>
                        <ol>
                            <li>
                               Nombre<br>
							  <input type="text" id="NombreDeUsuario" placeholder="Nombre" name="NombreDeUsuario" required="true">
                            </li>
							
							<li>
                              Apellido<br>
							  <input type="text" id="NombreDeUsuario2" placeholder="Apellido" name="NombreDeUsuario2" required="true">
                            </li>
						     <li>
							
                             Contraseña<br>
                             <input type="password" id="Password"  placeholder="Contraseña" name="Password" required="true"> 
							</li>  
                             <li>
                                Numero de Cuenta<br>
                                <input type="text" id="NCuenta" placeholder="Numero de cuenta" name="NCuenta" required="true">
                                
                            </li>							
                            <li>
                                Seleccione Carrera<br>
								<select name="Carrera" id="Carrera" placeholder="" required="true"> 
								
							                                                      
								<option value="Ing. en Informática">Ing. en Informática</option>
								<option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                                <option value="Lic. en Turismo">Lic. en Turismo</option>
								<option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
								<option value="Lic. en Derecho">Lic. en Derecho</option>
								<option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
								<option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
								<option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                                </select>
                                <!--<input type="text" id="Carrera" placeholder="nformatica" name="Carrera">-->
                                
                            </li>
							<li>
							
                            Correo Electronico<br>
                            <input type="text" id="Email" placeholder="Correo" name="Email" required="true">@unitec.edu
                                
                            </li>
							
							<li>
							
                            Telefono<br>
                            <input type="text" id="Telefono" placeholder="Telefono" name="Telefono" required="true">
                                
                            </li>
     
                           
						  
							
                        </ol>
						<input type="submit" value="Registrarse">
                        </form></section>
						<div id="msj" name="msj"></div>
                    </article>

		  
		  
		
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
	<!-- Inicio php insert -->
<?php                  
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or
 die("Problemas en la conexion");
mysql_select_db("ceutec",$conexion) or
  die("Problemas en la selección de la base de datos");
 
  
  if("" != $_REQUEST[Carrera] or "" != $_REQUEST[Telefono] or $_REQUEST[NombreDeUsuario] != "" or $_REQUEST[NombreDeUsuario2] != "" or $_REQUEST[Password] !="" or $_REQUEST[NCuenta]!="" or $_REQUEST[Email]!="")
  {
  
  if(is_numeric($_REQUEST[NCuenta]) and strlen($_REQUEST[NCuenta])==8 ){
  
  if("" != $_REQUEST[Carrera] and "" != $_REQUEST[Telefono] and $_REQUEST[NombreDeUsuario] != "" and $_REQUEST[NombreDeUsuario2] != "" and $_REQUEST[Password] !="" and $_REQUEST[NCuenta]!="" and $_REQUEST[Email]!="" and strlen($_REQUEST[NCuenta])==8)
  {

  
  //-----
 $erail="".$_REQUEST[Email]."@unitec.edu";
  $registros=mysql_query("select IdEstudiante,Correo from estudiantes where IdEstudiante=$_REQUEST[NCuenta] or Correo='$erail'",$conexion) or
  die("Problemas en el select1:".mysql_error());
  
  #
  $corre="";
    while($row = mysql_fetch_array($registros))
  {
  
   $numerocuent=$row['IdEstudiante'];
   $corre=$row['Correo'];
  
 }
 

 
  
  
  if($numerocuent==$_REQUEST[NCuenta] or $corre == $erail){

echo '<script>document.getElementById("msj").innerHTML ="El correo/Numero de cuenta ingresado ya esta registrado<br> en caso de ser suyos Visite el area deportiva, para darle<br> seguimiento a su caso.";</script>'; 
 
                                                                        
  
  }else{
  //------
  
   $MMMM="".$_REQUEST[Email]."@unitec.edu";
  //INICIO INSERT____________________________________________
  $numeroAleatorio = rand(0,10000);
  $registros=mysql_query("insert into temp(nombret,apellidot,telefonot,contrat,numerocuentat,carrerat,correot,num) values ('$_REQUEST[NombreDeUsuario]','$_REQUEST[NombreDeUsuario2]','$_REQUEST[Telefono]','$_REQUEST[Password]','$_REQUEST[NCuenta]','$_REQUEST[Carrera]','$MMMM',$numeroAleatorio)",$conexion) or
  die("Problemas Registrando datos en temp:".mysql_error());
  #punciona ;) 3 hora en eto
  
  /*INICIAMOS EL CODIGO PHP*/
$header="From: AREA DEPORTIVA:<$_REQUEST[Email]>\n";
/*CREAMOS UN HEADER DONDE DEFINIMOS EL REMITENTE DEL CORREO,
ESTO LO ASIGNAMOS A LA VARIABLE $header*/
$header.="MIME-Version: 1.0\n";
$header.="Content-type: text/html; charset=iso-8859-1";
/*CONTINUAMOS EL HEADER (NOTESE EL ".=" EN VEZ DE SOLO "="),
DEFINIDIENDO AHORA, QUE EL CORREO SE ENVIARA EN FORMATO HTML.
ESTO TAMBIEN LO ASIGNAMOS A LA VARIABLE $header*/
$msj="Bienvenido a polideportivo ceutec ".$_REQUEST[NombreDeUsuario]."<br>
      aqui enlistamos sus datos:<br>Nombre:".$_REQUEST[NombreDeUsuario]."
	  <br>Apellido:".$_REQUEST[NombreDeUsuario2]." <br>Contraseña:".$_REQUEST[Password]."<br>Numero de cuenta:".$_REQUEST[NCuenta]."
	  <br> Carrera:".$_REQUEST[Carrera]."<br>Correo:".$_REQUEST[Email]."@unitec.edu
	  <br>Telefono:".$_REQUEST[Telefono]."
	  <br>Para verificar su correo ingresar
	  <br>En el siguiente url, introducir numero de cuenta y este numero:".$numeroAleatorio."
	  <br><a href='http://appletenhtml.comule.com/polideportivo/1verificar.php'>Verificar cuenta polideportivo</a>
	  <br>Te esperamos en el polideportivo<br><h1>SALUDOS!</h1>";
//$msj.="<br><a href='www.comolohago.cl'>Click</a>";
/*CREAMOS EL MENSAJE (NOTESE NUEVAMENTE EL ".=") QUE IRA EN EL CORREO
Y LO ASIGNAMOS A LA VARIABLE $msj*/
$dest=$_REQUEST[Email]."@unitec.edu";
/*ASIGNAMOS A LA VARIABLE $dest EL CORREO AL QUE ENVIAREMOS EL CORREO
LAS PRUEBAS DEBEN HACERSE CON UN CORREO REAL*/
$asunto="Confirmacion de registro";
/* EN LA VARIABLE $asunto GUARDAMOS EL ASUNTO DEL MENSAJE*/
mail($dest,$asunto,$msj,$header);

   echo '<script>document.getElementById("msj").innerHTML = "Se le a enviado un menaje de<br>verificacion revise su correo.";</script>'; 

    
  }
  
 
   } else {
  
   
   echo '<script>document.getElementById("msj").innerHTML = "NOTA: Introducir todos los datos.";</script>';  
   echo '<script>document.getElementById("NombreDeUsuario").value = "'.$_REQUEST[NombreDeUsuario].'";</script>';
   echo '<script>document.getElementById("NombreDeUsuario2").value = "'.$_REQUEST[NombreDeUsuario2].'";</script>';
   echo '<script>document.getElementById("Password").value = "'.$_REQUEST[Password].'";</script>';
   echo '<script>document.getElementById("NCuenta").value = "'.$_REQUEST[NCuenta].'";</script>';
   echo '<script>document.getElementById("Carrera").value = "'.$_REQUEST[Carrera].'";</script>';
   echo '<script>document.getElementById("Telefono").value = "'.$_REQUEST[Telefono].'";</script>';
   echo '<script>document.getElementById("Email").value = "'.$_REQUEST[Email].'";</script>';
   
   
   
  
  }

  }else{
  
   
  
  
     echo '<script>document.getElementById("msj").innerHTML = "Numero de cuenta incorrecta.";</script>'; 
     echo '<script>document.getElementById("NombreDeUsuario").value = "'.$_REQUEST[NombreDeUsuario].'";</script>';
     echo '<script>document.getElementById("NombreDeUsuario2").value = "'.$_REQUEST[NombreDeUsuario2].'";</script>';
     echo '<script>document.getElementById("Password").value = "'.$_REQUEST[Password].'";</script>';
     echo '<script>document.getElementById("NCuenta").value = "'.$_REQUEST[NCuenta].'";</script>';
     echo '<script>document.getElementById("Carrera").value = "'.$_REQUEST[Carrera].'";</script>';
	 echo '<script>document.getElementById("Telefono").value = "'.$_REQUEST[Telefono].'";</script>';
     echo '<script>document.getElementById("Email").value = "'.$_REQUEST[Email].'";</script>';
	 
	  if (strlen($_REQUEST[NCuenta]!=8) and $_REQUEST[Email]!="")
   {
   echo '<script>document.getElementById("msj").innerHTML = "Numero de cuenta incorrecto.";</script>';
   }
                
				
				}
  
  
  }
  $numerocuent="";
  $corre="";
mysql_close($conexion);
  
  ?>
<!-- Fin php  -->

			
  </body>
</html>
