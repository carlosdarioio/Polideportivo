<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
window.location = "movil/m.Registro_alm.php";

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
                                <li><a href="loggin.php" id="LoginView1_loginLink">Iniciar sesión</a></li>.
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
                
    
   <!-- ------------------- -->
   
	  <article class="contact">
	  
	  <section class="contact">
	  <form action="Registro_alm.php" method="post">
                        <legend><h1>Formulario de registro</h1></legend>
                        <ol>
                            <li>
                              Nombre<br>
							  <input type="text" id="NombreDeUsuario" placeholder="Nombre" name="NombreDeUsuario">
                            </li>
							
							<li>
                              Apellido<br>
							  <input type="text" id="NombreDeUsuario2" placeholder="Apellido" name="NombreDeUsuario2">
                            </li>
						     <li>
							
                             Contraseña<br>
                             <input type="password" id="Password"  placeholder="Contraseña" name="Password"> 
							</li>  
                             <li>
                                Numero de Cuenta<br>
                                <input type="text" id="NCuenta" placeholder="Numero de cuenta" name="NCuenta">
                                
                            </li>							
                            <li>
                                Seleccione Carrera<br>
								<select name="Carrera" id="Carrera" placeholder=""> 
								
							                                                      
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
                            <input type="text" id="Email" placeholder="Correo" name="Email">@unitec.edu
                                
                            </li>
							
							<li>
							
                            Telefono<br>
                            <input type="text" id="Telefono" placeholder="Telefono" name="Telefono">
                                
                            </li>
     
                           
						  
							
                        </ol>
						<input type="submit" value="Registrarse">
                        </form></section>
						<div id="msj" name="msj"></div>
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
<?php                  //db4free.net","ceutec","ceutec"
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or
 die("Problemas en la conexion");
mysql_select_db("ceutec",$conexion) or
  die("Problemas en la selección de la base de datos");
 // echo "< script>alert('ok');</script>";
  
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
  #
  
//echo " row cuenta: ".$numerocuent;
//echo " row corre: ".$corre;
//echo " rquest cuenta: ".$_REQUEST[NCuenta];
//echo " rquest emial: ".$erail;
  
 
  
  
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
	  <br><a href='http://appletenhtml.comule.com/polideportivo/verificar.php'>Verificar cuenta polideportivo</a>
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
/*EJECUTAMOS LA FUNCION COMO TAL, EL ORDEN ES IMPORTANTE ASI QUE SE DEBE MANTENER,
USAMOS LAS VARIABLES QUE ASIGNAMOS ANTERIORMENTE*/
//echo "Mensake enviado";
   echo '<script>document.getElementById("msj").innerHTML = "Se le a enviado un menaje de<br>verificacion revise su correo.";</script>'; 

    //FIN INSERT____________________________________________
  }
  
 // echo '<script> alert("Se le a enviado un menaje de<br>verificacion revise su correo.");</script>';
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
<!-- Fin php insert -->
</body>
</html>
