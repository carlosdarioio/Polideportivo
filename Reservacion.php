<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
window.location = "movil/m.Reservacion.php";

}
else
{

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reservacion</title>

</head>
<body>
<div class="CONT" align="center" >

   

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
        <li> <a href="Registro_alm.php">Registro de Usuario </a> </li>
        
    </ul>

            </div>
            <div id="ColumnaCentro">
                
    
   

	  <article class="contact">
	  <h2>Reservacion</h2>
	  Por este medio podras solicitar la reservacion de una cancha que estes<br>
	  interesado en reservar, para uso propio estableciendo fecha y hora,<br>
	  junto a la seleccion del area deportiva a solicitar.
	  <section class="contact">
        <header>
            <h3>Horarios para reservacion:</h3>
        </header>
        <p>        
           Lunes a Viernes:
		   <br>2:00 P.M.. a 9:00 P.M.<br>
           <br>Sabado:<br>
		   8:00 A.M. a 12:00 P.M. 
		   </p>
		
	</section>
	  <section class="contact">
	  <form action="Reservacion.php" method="post">
                        <legend><h3>Formulario para reservacion de canchas</h3></legend>
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
								<option value="cn">Seleccione cancha</option>
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
							
							  <li>
							  
							  <!--
                                Dia:<br>
								<select name="dia" id="dia" placeholder=""> 
								<option value="Lunes">Lunes</option>							                                                      
								<option value="Martes">Martes</option>
								<option value="Miercoles">Miercoles</option>
                                <option value="Jueves">Jueves</option>
								<option value="Jueves">Viernes</option>
								<option value="Viernes">Sabado</option>
                                </select>  -->
                                Fecha:<br><input type="date" name="Calendario" id="Calendario">
                                
                            </li>
							
													  <li>
                                Horario:<br>
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
						<input type="submit" value="Reservar" <?php if($_SESSION['Ucarrera']==""){echo "disabled";} ?>>
                        </form></section>
						
						<div id="msj"></div>
						<br>
						<div id="msj2"><?php if($_SESSION['Ucarrera']==""){echo "Para hacer reservacion Nesecitas iniciar sesion"; } ?></div>
						
                    </article>

   
   <!-- --------------------- -->

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

<!-- 
  $_SESSION['Unombre']
  $_SESSION['Ucorreo']
  $_SESSION['Ucarrera']

-->
<?php


list($anio, $mes, $dia) = explode("-",$_REQUEST[Calendario]); 
//echo "Año: $anio <br />"; 
//echo "Mes: $mes <br />"; 
//echo "Dia: $dia <br />"; 


$hoydia = date("d");
//echo "1:".$hoydia;

$hoymes = date("m");
//echo "<br>2:".$hoy2;

$hoyanyo = date("y");

$hoyhora=date("H");
//echo "<br>3:".$hoy3;
$fechaHoy = date('Y-m-d');
   //if( (Int)$anio>=(Int)$hoyanyo and (Int)$mes>=(Int)$hoymes and (Int)$dia> (Int)$hoydia)
     //{
	 if($_REQUEST[Calendario]>$fechaHoy)
     {
	 
	 
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

$clavebuscada=mysql_query("select anyo,mes,dia,hora from solicitud where anyo = '$anio' and mes = '$mes' and dia = '$dia' and hora = '$_REQUEST[hora]'",$conexion) or
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
	 if( (Int)$anio!=(Int)$Anyobd and (Int)$mes!=(Int)$Mesbd and (Int)$dia!=(Int)$Diabd and $Horabd!=$_REQUEST[hora])
     {
	    	  //pppppppppppporrrrrrrrrrrrrr aqu ivas aqui ingresarias los datos a los de solicitud
             // y enviareas el mensaje avisando


            //------------regustro-envio-------------------------------
			
			if($_REQUEST['Cancha']!="cn" and $_REQUEST['hora']!="hr"){
			
			/*
			$hoydia = date("d");
//echo "1:".$hoydia;

$hoymes = date("m");
//echo "<br>2:".$hoy2;

$hoyanyo = date("y");

$hoyhora=date("h");$FhoY="".$hoyanyo."/".$hoymes."/".$hoydia;
			
			*/
			
//FechaHoraSolicitud,IdEstudiante,IdEstadoReservacion,HoraReservacion,FechaReservacion,IdCancha
//'$FechaHoraSolicitud','$_SESSION[cuenta]','3','$hoyhora','$FhoY','$_REQUEST[cancha]'
//$FechaHoraSolicitud="".$_REQUEST[Calendario]." ".$_REQUEST[hora];
date_default_timezone_set('CA');

$calen="".$mes."/".$dia."/".$anio."";
//$hoyhora2=date("H")+":"+date("i")+":"+date("s")+" "+date("A");
$hoyhora2=date('m/d/y h:i:s A');
$FhoY="".$hoymes."/".$hoydia."/".$hoyanyo;
//en los value de hora pone h.00.00 pm
//dia actual en el q lo ase
$FechaHoraSolicitud=$Fhoy." ".$hoyhora2;
//echo $FechaHoraSolicitud;
$registros=mysql_query("insert into reservacioncancha(FechaHoraSolicitud,IdEstudiante,Estado,HoraReservacion,FechaReservacion,IdCancha,IdEstudiante2) values ('$FechaHoraSolicitud','$_SESSION[cuenta]','Pendiente','$_REQUEST[hora]','$calen','$_REQUEST[Cancha]','0')",$conexion) or
  die("Problemas Registrando datos en reservacioncancha:".mysql_error());
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
$msj="El alumno: ".$_SESSION[Unombre]." con el numero de cuenta".$_SESSION[cuenta]."
      <br>le envio una solicitud sobre una reservacion de cancha, se espera su entrada
	  <br>al sistema para verificar la solicitud";
//$msj.="<br><a href='www.comolohago.cl'>Click</a>";
/*CREAMOS EL MENSAJE (NOTESE NUEVAMENTE EL ".=") QUE IRA EN EL CORREO
Y LO ASIGNAMOS A LA VARIABLE $msj*/
//aqui iria el coreeo
$dest="Felixramirez"."@unitec.edu";
/*ASIGNAMOS A LA VARIABLE $dest EL CORREO AL QUE ENVIAREMOS EL CORREO
LAS PRUEBAS DEBEN HACERSE CON UN CORREO REAL*/
$asunto="Reservacion de cancha";
/* EN LA VARIABLE $asunto GUARDAMOS EL ASUNTO DEL MENSAJE*/
mail($dest,$asunto,$msj,$header);
/*EJECUTAMOS LA FUNCION COMO TAL, EL ORDEN ES IMPORTANTE ASI QUE SE DEBE MANTENER,
USAMOS LAS VARIABLES QUE ASIGNAMOS ANTERIORMENTE*/
//echo "Mensake enviado";
  
  echo '<script>document.getElementById("msj").innerHTML = "Se le a enviado un mensaje de<br>de solicitud al encargado.";</script>'; 
  //echo '<script> alert("Se le a enviado un mensaje de<br>de solicitud al encargado.");</script>';
			//----------fin registro envio
       }else{
	   echo '<script>document.getElementById("msj").innerHTML = "No ha completado la seleccion de datos";</script>';
          echo '<script>document.getElementById("Cancha").value = "'.$_REQUEST[Cancha].'";</script>';
		 echo '<script>document.getElementById("Calendario").value = "'.$_REQUEST[Calendario].'";</script>';
		 echo '<script>document.getElementById("hora").value = "'.$_REQUEST[hora].'";</script>';
	   
	   }
			 
	 //aqui terminaaaaa
	 }else{
	 echo '<script>document.getElementById("msj").innerHTML = "La solicitud establecida ya esta ocupada";</script>';
          echo '<script>document.getElementById("Cancha").value = "'.$_REQUEST[Cancha].'";</script>';
		 echo '<script>document.getElementById("Calendario").value = "'.$_REQUEST[Calendario].'";</script>';
		 echo '<script>document.getElementById("hora").value = "'.$_REQUEST[hora].'";</script>';	 
	 
  	 //echo "<script>alert('La solicitud establecida ya esta ocupada');</script>";
	        }
	 
	 
	 
	 //-------------------------------fin select------------------------

      }  
    else
     {//entra!
	           if($dia!="" and $mes!="" and $anio!=""){
        if($dia==$hoydia){//entra!
        echo '<script>document.getElementById("msj").innerHTML = "La reservacion solicitada no puede ser para el mismo dia.";</script>'; 
		echo '<script>document.getElementById("Cancha").value = "'.$_REQUEST[Cancha].'";</script>';
		 echo '<script>document.getElementById("Calendario").value = "'.$_REQUEST[Calendario].'";</script>';
		 echo '<script>document.getElementById("hora").value = "'.$_REQUEST[hora].'";</script>';
		//echo "<script>alert('La reservacion solicitada no puede ser para el mismo dia');</script>";
        
		}
		
		if( (Int)$anio<(Int)$hoyanyo or (Int)$mes<(Int)$hoymes or (Int)$dia < (Int)$hoydia)
         {
		 echo '<script>document.getElementById("msj").innerHTML = "La reservacion solicitada quedo en el pasado.";</script>';
		 echo '<script>document.getElementById("Cancha").value = "'.$_REQUEST[Cancha].'";</script>';
		 echo '<script>document.getElementById("Calendario").value = "'.$_REQUEST[Calendario].'";</script>';
		 echo '<script>document.getElementById("hora").value = "'.$_REQUEST[hora].'";</script>';
	     //echo "<script>alert('La reservacion solicitada quedo en el pasado');</script>";
	           }
		
		                                               }
													   else
													   {
		
		 echo '<script>document.getElementById("Calendario").value = "'.$_REQUEST[Calendario].'";</script>';
		 
													   }
     }
$anio="";
$mes="";
$dia="";
 ?>

<!-- Fin php insert -->
</body>
</html>