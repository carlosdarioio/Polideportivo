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
    <div id="myCarousel" class="carousel slide mmm2" data-ride="carousel">        
          </div><!-- /.carousel -->


    
	  
	  
	  
	  <!-- Moviendo-->
	    <div class="contenedor marketing">
   
      <div class="FiLa">
       
	   <div class="FiLa featurette">
        <div class="columna7">
          <h2 class="featurette-heading">Retos</h2>
          <p class="lead">
		 Te gusta el deporte y buscas personas con quienes enfrentarte, entonces
	  ingresa tu solicitud en espera del rival que acepte tu reto o viceversa.
		  
		  </p>
		  
				  
		  <!-- -->
		 	 <article class="contact">
	  <h2></h2>
	  
	  <section class="contact">
        
		
	</section>
	  <section class="contact">
	
		  <section class="contact">
        <header>
            <h3>Ingresa tu reto:</h3>
        </header>
	  <form action="1Retos.php" method="post">
                        <legend></legend>
                        <ol>
						
						<!--
                            <li>
							Usuario:<br><?php echo "".$_SESSION[Unombre];?>
							</li>
							
							<li>
							Numero de Cuenta:<br><?php echo "".$_SESSION[cuenta];?>
							</li>
							
							<li>
							Correo:<br><?php echo "".$_SESSION[Ucorreo]."@unitec.edu";?>
							</li>
                          -->
						   <li>
                                Cancha:<br>
								<select required name="Cancha" id="Cancha" placeholder="" >
								<option value="">Seleccione cancha</option>
                                <?php
								
								 $conexion=mysql_connect("db4free.net","ceutec","ceutec") or
                               die("Problemas en la conexion");

                               mysql_select_db("ceutec",$conexion) or//a8060626_12
                              die("Problemas en la selección de la base de datos");

                            $clavebuscada=mysql_query("select IDCancha,Descripcion from canchas",$conexion) or
                            die("Problemas en el select:".mysql_error());

    
                         while($row = mysql_fetch_array($clavebuscada))
                                {
                                 echo '<option value="'.$row['IDCancha'].'">'.$row['Descripcion'].'</option>';
								  }
								?>														
                                </select>
                                <!--<input type="text" id="Carrera" placeholder="nformatica" name="Carrera">-->
                                
                            </li>
							
							
							<li>Fecha:<br><input type="date" name="Calendario" id="Calendario" required="true"></li>
							
							
													  <li>
                                Hora:<br>
								<select required name="hora" id="hora" placeholder="lol"> 
			                    <option value="">Seleccione horario</option>
								<option value="08:00:00 AM">08:00 A.M. - 09:00 A.M.</option>
								<option value="09:00:00 AM">09:00 A.M. - 10:00 A.M.</option>
                                <option value="10:00:00 AM">10:00 A.M. - 11:00 A.M.</option>
								<option value="11:00:00 AM">11:00 A.M. - 12:00 M.</option>
                                
								<option value="02:00:00 PM">02:00 P.M. - 03:00 P.M.</option>
								<option value="03:00:00 PM">03:00 P.M. - 04:00 P.M.</option>
								<option value="04:00:00 PM">04:00 P.M. - 05:00 P.M.</option>
								<option value="05:00:00 PM">05:00 P.M. - 06:00 P.M.</option>
								<option value="06:00:00 PM">06:00 P.M. - 07:00 P.M.</option>
								<option value="07:00:00 PM">07:00 P.M. - 08:00 P.M.</option>
								<option value="08:00:00 PM">08:00 P.M. - 09:00 P.M.</option>	
                    
								</select>

                                
                            </li>
                           
						  
							
                        </ol>                                 <!-- En caso de no iniciar sesion no podra apretar el boton-->
						<input type="submit" name="ireto" value="Enviar" <?php if($_SESSION['Ucarrera']==""){echo "disabled";} ?>>
                        </form>
						<div id="msj"></div><br>
					    <div id="msj2"><?php if($_SESSION['Ucarrera']==""){echo "Para enviar reto Nesecitas iniciar sesion"; } ?></div>
						</section>
	<section class="contact">
		
					 <section class="">
	<header><h3>Retos solicitados</h3></header>
	¿Buscas alguien con quien jugar?<br>
	aqui personas interesadas:
	 
	 <br><br>
	 <table class="table">
		 
		    <tr>
		     <th>Cancha</th>
			 <th>Fecha</th>
		     <th>Hora</th>
			 <th> Retalo </th>
		    </tr>
	<?php  
	  $conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
	  mysql_select_db("ceutec",$conexion) or//a8060626_12
      die("Problemas en la selección de la base de datos");
      $clavebuscada=mysql_query("select id,numerocuenta,cancha,periodo,anyo,mes,dia from reto",$conexion) or
      die("Problemas en el select:".mysql_error());


      while($row = mysql_fetch_array($clavebuscada))//while1
      {
	   
	   $clavebuscada2=mysql_query("select Descripcion from canchas where IdCancha='$row[cancha]'",$conexion) or
      die("Problemas en el select:".mysql_error());
	  $roww="";
	  
	  while($row2 = mysql_fetch_array($clavebuscada2))//while2
      {	      $roww=$row2['Descripcion'];}//fin row2
        // 
		  $rr="";
		 if($_SESSION['Ucarrera']==""){$rr= "disabled";}
		
		echo'<form action="1Retos.php" method="post">
		       <input type="hidden" value="'.$row['cancha'].'" name="ID" id="ID">
			   <input type="hidden" value="'.$row['id'].'" name="IDD" id="IDD">
			   <input type="hidden" value="'.$row['numerocuenta'].'" name="NMC" id="NMC">
   		      <tr>
			     <td> <input type="text" value="'.$roww.'" id="canchaaa" name="canchaaa" readonly="readonly"></td>
			     <td> <input type="text" value="'.$row['mes'].'/'.$row['dia'].'/'.$row['anyo'].'" id="Calendario" name="Calendario" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['periodo'].'" id="periodoa" name="periodoa" readonly="readonly"> </td>
				 <td> <input type="submit" name="Retar" value="Retar" '.$rr.' > </td>
			  </tr>
			 </form>';
		
		 
         
		 }//fin FiLa1
	
	
	
	
	?> <p>Ignorar retos mal establecidos( Por Cancha, fecha u hora)</p><br><br> </table>
	
	   
	
						
	<div id="msj"></div>
	<br>
	<div id="msj2"><?php if($_SESSION['Ucarrera']==""){echo "<br><br><br><br><br><br><br><br>Para hacer retos Nesecitas iniciar sesion"; }else{echo "<br><br><br><br><br><br><br>";} ?></div>
	<p>Por cuestiones de seguridad no mostramos No. Cuenta ni el nombre de las personas.</p>
	
    </section>
	
	</section>
	</section>
						
						
                    </article>  
		  <!-- -->
		  
        </div>
        <div class="columna5">
          
		  <img class="featurette-image img-responsive" src="http://png.clipart.me/graphics/previews/501/sketching-of-the-volleyball-basketball-and-american-football_50136337.jpg" alt="Generic placeholder image"/>
      
		<header>
            <h3>Horarios para establecer retos:</h3>
        </header>
        <p>        
           Lunes a Viernes:
		   <br>2:00 P.M.. a 9:00 P.M.<br>
           <br>Sabado:<br>
		   8:00 A.M. a 12:00 P.M. 
		   </p>
		<br>
		
		   
		  <article class="">
	   </p>
	 

						
					
						
                    </article>
		 
		 
		
		
		</div>
		
		
		
		
		
      </div>
	   
       

	 
      </div><!-- /.FiLa -->


     
        
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
     

    </div><!-- /.contenedor -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="txtok.js"></script>    
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
