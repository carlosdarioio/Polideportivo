<?php session_start();?>
<!DOCTYPE html>

<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />

<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
window.location = "movil/m.Reto.php";

}
else
{

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reto</title>

</head>
<body>
<div class="CONT" align="center" >
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
   

    <div>

        <div id ="Cabecera">

            <div id="ContenidoCabecera">
                <div id="BarraArriba">
                    <ul>
                        <li> <a href="Principal.php"> Inicio </a></li>
                        <li> <a href="R.php"> Registro </a></li>
                        <li> <a href="Reservacion.php"> Reservación </a></li>
						<li> <a href="Torneo.php"> Torneos </a></li>
						 <li> <a href="Reto.php"> Retos </a></li>
						  <li> <a href="Historial.php"> Historial </a></li>
                        <li> <a href="AcercaDe.php"> AcercaDe </a></li>
						<li> <a href="loggin.php"> loggin </a></li>
						
                    </ul>
                </div>
                <div id="Logotipo">                   

                    <img src="Imagenes/logo3.png" alt="logo" style="height:54px; width:244px;"/>

                </div>
                <div id="Titulo">
                    <h1>Solicitud Para Reservacion de Canchas</h1>
                    <section id="login" align="right">
                    
                            <ul>
                                <li><a href="R.php" id="LoginView1_registerLink">Registrarse</a></li>
                                <li><a href="loggin.php" id="LoginView1_loginLink">Iniciar sesión</a></li>
								<li> <a href="salir.php"> salir </a></li>
                            </ul>
                        
                </section>

                </div>

            </div>

        <div id ="Bajo">
            <div id ="ColumnaIzquierda">
                
    <ul id="MenuContextual">
        <li> <a href="#">Retos </a> </li>
        
    </ul>

            </div>
            <div id="ColumnaCentro">
                
    
   <!-- 
     $_SESSION['Unombre']
  $_SESSION['Ucorreo']
  $_SESSION['Ucarrera']------------------- -->

	  <article class="contact">
	  <h1>Retos</h1>
	  <p>Te gusta el deporte y buscas personas con quienes enfrentarte, entonces<br>
	  ingresa tu solicitud en espera del rival que acepte tu reto o viceversa.<br>
	   </p>
	   <section class="contact">
        <header>
            <h3>Horarios establecer retos:</h3>
        </header>
        <p>        
           Lunes a Viernes:
		   <br>2:00 P.M. a 9:00 P.M.<br>
           <br>Sabado:<br>
		   8:00 A.M. a 12:00 P.M. 
		   </p>
		
	</section>
	  <section class="contact">
        <header>
            <h3>Ingresa tu reto:</h3>
        </header>
	  <form action="Reto.php" method="post">
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
								<select name="Cancha" id="Cancha" placeholder="">
								<option value="hr">Seleccione cancha</option>
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
							
							
							<li>Fecha:<br><input type="date" name="Calendario" id="Calendario"></li>
							
							
													  <li>
                                Hora:<br>
								<select name="hora" id="hora" placeholder=""> 
			                    <option value="hr">Seleccione horario</option>
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
	<header><h3>Retos solicitados</h3></header>
	¿Buscas alguien con quien jugar?<br>
	aqui personas interesadas:
	 
	 <br><br>
	 <table style="width:6%; border-spacing:1; ">
		 
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
		
		echo'<form action="Reto.php" method="post">
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
		
		 
         
		 }//fin row1
	
	
	
	
	?> </table>
	
	   
	
						
	<div id="msj"></div>
	<br>
	<div id="msj2"><?php if($_SESSION['Ucarrera']==""){echo "<br><br><br><br><br><br><br><br>Para hacer retos Nesecitas iniciar sesion"; }else{echo "<br><br><br><br><br><br><br>";} ?></div>
	<p>Por cuestiones de seguridad no mostramos No. Cuenta ni nombre</p>
	
    </section>
					<p>En resumen reta a otro rival o suscribete asia la espera de un rival interesado.</p>	
                    </article><br>

   
   <!-- --------------------- -->
   	
   
   <!-- -------------------------->

            </div>
            <div id="ColumnaDerecha">

                  <div id="Enlaces">
                  </div><div><?php// echo "".$_SESSION['cuenta'];?></div>
				  <div id="ImagenLogo">
				  <img src="Imagenes/logosimple.png" alt="logo" style="height:153px; width:177px; text-align: center;"/>
                  </div> 
                </div>
				
            </div>
            <div id="Pie">
			<div id="scroll" align="right">
                <a title="Desplazar hacia arriba" class="top" href="#"><img src="top.png" alt="top" /></a>
                </div>
				<script type="text/javascript">
                $(document).ready(function() {
                $('ul.sf-menu').sooperfish();
                $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
                 });
                </script>
                <span> &copy; 2014 - Solicitud para reservación de canchas del polideportivo
				<br>
				<div align="center">
				<?php
				if($_SESSION['Unombre']!="")
				{
				echo $_SESSION[Unombre];
				echo "<a href='"."salir.php"."'>( Cerrar Sesion )</a>";
				}
				?>
				
				</div>
				
				</span>             

            </div>
        </div>
    </div>
        </div>

    
	
	
	</div>
	
	
	


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
</body>
</html>