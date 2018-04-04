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
<title>Registro</title>

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
        <li> <a href="#">Loggin </a> </li>
        
    </ul>

            </div>
            <div id="ColumnaCentro">
                
    
   <!-- ------------------- -->
   
<article class="contact">
	  <h1>Loggin</h1>
   
   <section class="contact">
        <header>
            <h3></h3>
        </header>
        Ingrese numero de cuenta y correo.
                
              
                   
					<form action="loggin.php" method="post">
                    <ol>
                        <li>
						
                           Numero de cuenta
						   <br><input type="text" id="UserName" name="UserName" placeholder="Numero de cuenta">
                        </li>
                        <li>
                            Contraseña
                            <br><input type="password" id="Password" name="Password" placeholder="Contraseña">
                        </li>
                        
                    </ol>
					<input type="submit" id="Login" value="Entrar">
			
					</form>
					<div id="msj"></div>
                
           
      
        <p>
            <a href="Registro_alm.php">Registrate </a>en caso no tengas cuenta.
        </p>
		<br><br><br>
		 <p>
            <a href="RestablecerContrasena.php">Olvide mi contraseña.</a>
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


if($_REQUEST[UserName]=="" and $_REQUEST[Password]==""){
      
	 // if($_REQUEST[UserName]=="" or $_REQUEST[Password]==""){
//echo '<script>document.getElementById("msj").innerHTML = "Introducir todos los datos.";</script>';
 echo '<script>document.getElementById("UserName").value = "'.$_REQUEST[UserName].'";</script>';
  echo '<script>document.getElementById("Password").value = "'.$_REQUEST[Password].'";</script>';
 // }
  
}else{

if(is_numeric($_REQUEST[UserName])){

//mysql17.000webhost.com","a8060626_12","cdfn33
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or
 die("Problemas en la conexion");

mysql_select_db("ceutec",$conexion) or//a8060626_12
  die("Problemas en la selección de la base de datos");

$clavebuscada=mysql_query("select Nombre,IdEstudiante,Correo,Carrera from estudiantes where IdEstudiante = '$_REQUEST[UserName]' and contra='$_REQUEST[Password]'",$conexion) or
  die("Problemas en el select:".mysql_error());


 //echo "<br>antes del whil:----------------------------------------";
  session_start();
  
 while($row = mysql_fetch_array($clavebuscada))
  {
  
  
  
  
  $_SESSION['cuenta'] = $row['IdEstudiante'];
  
  $_SESSION['Unombre'] = $row['Nombre'];
  $_SESSION['Ucorreo'] = $row['Correo'];
  $_SESSION['Ucarrera'] = $row['Carrera'];

  
  $pop=$row['IdEstudiante'];
  
  

  }
  
 //echo "<br> despues del whilw............................";



  
if( $pop==$_REQUEST[UserName]){  
//echo '<script>alert("As iniciado sesion correctamente");</script>';
echo '<script>document.getElementById("msj").innerHTML = "As iniciado sesion correctamente.";</script>';
                             }else{
//						echo '<script>alert("Usuario o contraseña incorrecto");</script>';
                        echo '<script>document.getElementById("msj").innerHTML = "Usuario o contraseña incorrecto.";</script>';						
						$_SESSION['cuenta']="";
							 }

mysql_close($conexion);


}else{

 echo '<script>document.getElementById("msj").innerHTML = "NOTA:Error Introdujo mal el numero de cuenta.";</script>'; 
     echo '<script>document.getElementById("UserName").value = "'.$_REQUEST[UserName].'";</script>';
     
     
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
