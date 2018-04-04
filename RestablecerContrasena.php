<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
window.location = "movil/m.loggin.php";

}
else
{

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restablecer Contraseña</title>

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
        <li> <a href="#">Restablecer Contraseña </a> </li>
        
    </ul>

            </div>
            <div id="ColumnaCentro">
                
    
   <!-- ------------------- -->
   
<article class="contact">
	  <h1>Restablecer Contraseña</h1>
   
   <section class="contact">
        <header>
            <h3></h3>
        </header>
        Ingrese numero de cuenta y correo.
                
              
                   
					<form action="RestablecerContrasena.php" method="post">
                    <ol>
                        <li>
						
                           Numero de cuenta
						   <br><input type="text" id="NumeroCuenta" name="NumeroCuenta" placeholder="Numero de cuenta">
                        </li>
                        <li>
                            Correo
                            <br><input type="password" id="correo" name="correo" placeholder="Correo">@unitec.edu
                        </li>
                        
                    </ol>
					<input type="submit" id="Login" value="Restablecer">
			
					</form>
					<div id="msj"></div>
               
           
      
        <p>
            <a href="Registro_alm.php">Registrate </a>en caso no tengas cuenta.
        </p>
		<br><br><br>
		<p>
            <a href="CambiarContrasena.php">Cambiar contraseña.</a>
        </p>
		<br><br>
		 <p>
            <a href="loggin.php">Loggin.</a>
        </p>
    </section>
                    </article>

   
   <!-- --------------------- -->

            </div>
            <div id="ColumnaDerecha">

                

                <div id="Enlaces">

                </div><div><?php //echo "".$_SESSION['cuenta'];?></div>
				
								  <div id="ImagenLogo">
				  <img src="Imagenes/logosimple.png" alt="logo" style="height:153px; width:177px; text-align: center;"/>
                  </div> 
            </div>
			<!-- Inicio php loggin -->

<?php
//------------------------------------------------------------------------------------
//echo "entraaaaaanooooooooooooooooooa<br>";


if($_REQUEST[NumeroCuenta]=="" and $_REQUEST[correo]==""){
      
	 // if($_REQUEST[NumeroCuenta]=="" or $_REQUEST[correo]==""){
//echo '<script>document.getElementById("msj").innerHTML = "Introducir todos los datos.";</script>';
 echo '<script>document.getElementById("NumeroCuenta").value = "'.$_REQUEST[NumeroCuenta].'";</script>';
  echo '<script>document.getElementById("correo").value = "'.$_REQUEST[correo].'";</script>';
 // }
  
}else{

if(is_numeric($_REQUEST[NumeroCuenta])){

//mysql17.000webhost.com","a8060626_12","cdfn33
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or
 die("Problemas en la conexion");

mysql_select_db("ceutec",$conexion) or//a8060626_12
  die("Problemas en la selección de la base de datos");
  $CCC="";
$CCC=$_REQUEST[correo]."@unitec.edu";
//echo "ccc ".$CCC;
//echo " Cuenta ".$_REQUEST[NumeroCuenta];
$clavebuscada=mysql_query("select IdEstudiante,Correo from estudiantes where IdEstudiante = $_REQUEST[NumeroCuenta] and Correo='$CCC'",$conexion) or
  die("Problemas en el select abc:".mysql_error());


 //echo "<br>antes del whil:----------------------------------------";

  $NMC="";
  $CRR="";
 while($row = mysql_fetch_array($clavebuscada))
  {
  
  
  
  
  $NMC = $row['IdEstudiante'];
  
  
  $CRR = $row['Correo'];
  
  
  

  }
  
 //echo "<br> despues del whilw............................";

//echo "<br>nmc ".$NMC;
//echo " crr".$CRR;

  
if( $NMC==$_REQUEST[NumeroCuenta] and $CRR==$CCC){  
//echo '<script>alert("As iniciado sesion correctamente");</script>';
 $numeroAleatorio = rand(0,10000);


$clavebuscada=mysql_query("Update estudiantes SET contra = '$numeroAleatorio' where IdEstudiante = '$_REQUEST[NumeroCuenta]' and Correo='$CRR'",$conexion) or
  die("Problemas en el select:".mysql_error());




$header="From: AREA DEPORTIVA:<$_REQUEST[correo]>\n";
$header.="MIME-Version: 1.0\n";
$header.="Content-type: text/html; charset=iso-8859-1";
$msj="Por este mensaje le avisamos que solicito un cambio de contraseña<br>
      se le avisa que su nueva contraseña es esta:<br>
	  <br>Contraseña:".$numeroAleatorio."
	  <br>Sugerimos que actualice su contraseña por una personal que recuerde.
	  <br>Por este link podra actualizar su contraseña:
	  <br><a href='http://appletenhtml.comule.com/polideportivo/CambiarContrasena.php'>Cambiar contraseña</a>
	  <br><br><a href='http://appletenhtml.comule.com/polideportivo/loggin.php'>Ya puedes iniciar sesion</a>
	  <br>Te esperamos en el polideportivo<br><h1>SALUDOS!</h1>";
$dest=$_REQUEST[correo]."@unitec.edu";
$asunto="Restablecer contraseña";
mail($dest,$asunto,$msj,$header);
  
  
  

echo '<script>document.getElementById("msj").innerHTML = "Contraseña restablecida vea su corre<br> para ver su nueva contraseña.";</script>';
                            

							
							
							
							
							}else{
//						echo '<script>alert("Numero  o contraseña incorrecto");</script>';
                        echo '<script>document.getElementById("msj").innerHTML = "Numero de cuenta o correo incorrecto.";</script>';						
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
	
	
	



</body>
</html>
