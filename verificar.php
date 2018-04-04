<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
window.location = "movil/m.verificar.php";

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
        <li> <a href="verificar.php">Verificando </a> </li>
        
    </ul>

            </div>
            <div id="ColumnaCentro">
                
    
   <!-- ------------------- -->
   <article class="contact">
	  <h1>Verificando datos</h1>
   
   <section class="contact">
        <header>
            <h3> <legend>Formulario de registro</legend></h3>
        </header>
	  
	  <form action="verificar.php" method="post">
                       
                        <ol>A continuacion llenar los datos:
                            
                             <li>
                                Numero de Cuenta<br>
                                <input type="text" id="NmCuenta" placeholder="Numero de cuenta" name="NmCuenta" >
                                
                            </li>							
                          
							<li>
							
                            Numero:<br>
                            <input type="Password" id="mmm" placeholder="Numero de verificacion" name="mmm" >
                                
                            </li>
     
                           
						  
							
                        </ol>
						<input type="submit" value="Registrarse">
                        </form></section>
						<div id="msj"></div>
						
						
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
	
	
	


<!-- Inicio php verificar -->


<!-- Inicio php insert -->
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

<!-- Fin php verificar -->
</body>
</html>
