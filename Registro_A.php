<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
window.location = "movil/m.Principal.php";

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
        <li> <a href="Registro_alm.php">Registro Usuario </a> </li>
        <li> <a href="Registro_A.php">Registro Administrador </a> </li>

    </ul>

            </div>
            <div id="ColumnaCentro">
                
    
     <fieldset class="contact">
	  <form action="Registro_alm.php" method="post">
                        <legend>Formulario de registro</legend>
                        <ol>
                            <li>
                              Nombre de usuario<br>
							  <input type="" id="NombreDeUsuario" placeholder="Nimbre De Usuario" name="NombreDeUsuario">
                            </li>
						     <li>
							
                             Contraseña<br>
                             <input type="password" id="Password"  placeholder="contraseña" name="Password"> 
							</li>  
                             <li>
                                Numero de Cuenta<br>
                                <input type="text" id="NCuenta" placeholder="Numero de cuenta" name="NCuenta">
                                
                            </li>							
                            <li>
                                Seleccione Carrera<br>
								<select name="Carrera" id="Carrera" placeholder=""> 
								<option value="Seleecione su carrera">Seleecione su carrera</option>
							                                                      
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
                            <input type="text" id="Email" placeholder="Email" name="Email">@unitec.edu
                                
                            </li>
     
                           
						  
							
                        </ol>
						<input type="submit" value="Registrarce">
                        </form>
						<div id="msj">........</div>
                    </fieldset>
            </div>
            <div id="ColumnaDerecha">

                <div id="ImagenLogo">
                    
                </div>

                <div id="Enlaces">
                  </div><div><?php echo "".$_SESSION['cuenta'];?></div>
                </div>
            </div>
            <div id="Pie">
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
$conexion=mysql_connect("mysql17.000webhost.com","a8060626_12","cdfn33") or
 die("Problemas en la conexion");
mysql_select_db("a8060626_12",$conexion) or
  die("Problemas en la selección de la base de datos");
  echo "< script>alert('ok');</script>";
  
  if("" != $_REQUEST[Carrera] and $_REQUEST[NombreDeUsuario] != "" and $_REQUEST[Password] !="" and $_REQUEST[NCuenta]!="" and $_REQUEST[Email]!="" ){

   $registros=mysql_query("insert into base(nombre,contra,numerocuenta,carrera,correo) values ('$_REQUEST[NombreDeUsuario]','$_REQUEST[Password]','$_REQUEST[NCuenta]','$_REQUEST[Carrera]','$_REQUEST[Email]')",$conexion) or
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
$msj="Ya estas registrado en el area pilodeportiva nombre:".$_REQUEST[NombreDeUsuario]." contraseña:".$_REQUEST[Password]."
      y su numero de cuenta visitanos:<br><a href='Principal.php'>Principal</a>
	  <br>Saludos cordiales desde el area polideportiva."
//$msj.="<br><a href='www.comolohago.cl'>Click</a>";
/*CREAMOS EL MENSAJE (NOTESE NUEVAMENTE EL ".=") QUE IRA EN EL CORREO
Y LO ASIGNAMOS A LA VARIABLE $msj*/
$dest=$_REQUEST[Email]."@unitec.edu";
/*ASIGNAMOS A LA VARIABLE $dest EL CORREO AL QUE ENVIAREMOS EL CORREO
LAS PRUEBAS DEBEN HACERSE CON UN CORREO REAL*/
$asunto="Confirmacion de registro";
/* EN LA VARIABLE $asunto GUARDAMOS EL ASUNTO DEL MENSAJE*/
mail($dest,$asunto,$msj,$header);
/*EJECUTAMOS LA FUNCION COMO TAL, EL ORDEN ES IMPORTANTE ASI QUE SE DEBE MANTENER,
USAMOS LAS VARIABLES QUE ASIGNAMOS ANTERIORMENTE*/
//echo "Mensake enviado";
  
  echo '<script> var a=$("#msj");a.html("Usuario registrado exitosamente");</script>';
   echo '<script> alert("Usuario registrado exitosamente.");</script>';
 
  } else {
  //echo "Error";
  echo '<script> var a=$("#msj");a.html("NOTA:Introducir todos los datos.");</script>';
   echo '<script>alert("NOTA:Introducir todos los datos.");</script>';
 // echo '<script>var a=getElementById("msj");a.InnerHtml("Nick "'.$_REQUEST[Carrera].'" ya esta en uso");</script>';
  }

  
  
  
  
  
mysql_close($conexion);
  
  ?>
<!-- Fin php insert -->
</body>
</html>