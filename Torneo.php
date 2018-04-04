<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
//window.location = "movil/m.Torneo.php";

}
else
{

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Torneo</title>

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
        <li> <a href="#">Futbol </a> </li>
		<li> <a href="#">basketball </a> </li>
		<li> <a href="#">voleibol </a> </li>
        
    </ul>

            </div>
            <div id="ColumnaCentro">
                
    
   <!-- ------------------- -->
    
	  	  <article class="contact">
	  <h1>Torneos</h1>
	     Por esta página enlistaremos los eventos que se piensan llevar a cabo en la
         universidad:<br><br>
          <!-- -->
		   <table style="width:6%; border-spacing:1; ">
		 
		    <tr>
		     <th>Nombre</th>
			 <th>Periodo</th>
			 <th>Tipo</th>
			 <th>Año</th>
		    </tr>
			
			<?php  
	  $conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
	  mysql_select_db("ceutec",$conexion) or//a8060626_12
      die("Problemas en la selección de la base de datos");
      $clavebuscada=mysql_query("select nombre,periodo,tipo,year from torneo",$conexion) or
      die("Problemas en el select nombre,fecha,tipo,year torneo:".mysql_error());


      while($row = mysql_fetch_array($clavebuscada))//while1
      {
	   
	   
	   echo "<tr><td>".$row['nombre']."</td>";
       echo "<td>".$row['periodo']."</td>";
       echo "<td>".$row['tipo']."</td>";	  
       echo "<td>".$row['year']."</td></tr>";		  
         
		 }//fin row1
	
	
	
	
	?>
			
		  </table><br><br><br><br><br><br><br><br><br><br>
		  <!-- -->
		 
		 <section class="contact">
	  <form action="Torneo.php" method="post" class="tbb" id="tbb">
      <legend align="center"><h3>Formulario de registro</h3></legend>
         Por este medio te podrás registrar en el torneo que te interese<br>
         llenando al menos 8 participantes con sus respectivos datos, <br>
		 junto al nombre del grupo.	  
                        <ol>
                 
		 <table class="tb2" id="tb2" style="width:6%; border-spacing:1; ">
		 
		    <tr>
		     <th>No.</th>
		     <th>Nombre</th>
		     <th>No. de cuenta</th>
			 <th>Telefono</th>
			 <th>Correo</th>
			 <th>Carrera</th>
		    </tr>
			
			<!--Alumno1 -->
            <tr>
			  <td> 1 </td>
			  <td> <input type="text" name="nombre1" id="nombre1" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta1" id="cuenta1" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono1" id="telefono1" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo1" id="correo1" placeholder="Correo"> </td>
			  <td> <select name="Carrera1" id="Carrera1" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno2 -->
            <tr>
			  <td> 2 </td>
			  <td> <input type="text" name="nombre2" id="nombre2" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta2" id="cuenta2" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono2" id="telefono2" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo2" id="correo2" placeholder="Correo"> </td>
			  <td> <select name="Carrera2" id="Carrera2" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno3 -->
            <tr>
			  <td> 3 </td>
			  <td> <input type="text" name="nombre3" id="nombre3" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta3" id="cuenta3" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono3" id="telefono3" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo3" id="correo3" placeholder="Correo"> </td>
			  <td> <select name="Carrera3" id="Carrera3" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno4 -->
            <tr>
			  <td> 4 </td>
			  <td> <input type="text" name="nombre4" id="nombre4" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta4" id="cuenta4" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono4" id="telefono4" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo4" id="correo4" placeholder="Correo"> </td>
			  <td> <select name="Carrera4" id="Carrera4" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			
			<!--Alumno5 -->
            <tr>
			  <td> 5 </td>
			  <td> <input type="text" name="nombre5" id="nombre5" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta5" id="cuenta5" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono5" id="telefono5" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo5" id="correo5" placeholder="Correo"> </td>
			  <td> <select name="Carrera5" id="Carrera5" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno6 -->
            <tr>
			  <td> 6 </td>
			  <td> <input type="text" name="nombre6" id="nombre6" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta6" id="cuenta6" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono6" id="telefono6" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo6" id="correo6" placeholder="Correo"> </td>
			  <td> <select name="Carrera6" id="Carrera6" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno7 -->
            <tr>
			  <td> 7 </td>
			  <td> <input type="text" name="nombre7" id="nombre7" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta7" id="cuenta7" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono7" id="telefono7" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo7" id="correo7" placeholder="Correo"> </td>
			  <td> <select name="Carrera7" id="Carrera7" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			
			<!--Alumno8 -->
            <tr>
			  <td> 8 </td>
			  <td> <input type="text" name="nombre8" id="nombre8" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta8" id="cuenta8" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono8" id="telefono8" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo8" id="correo8" placeholder="Correo"> </td>
			  <td> <select name="Carrera8" id="Carrera8" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			
			<!--Alumno9 -->
            <tr>
			  <td> 9 </td>
			  <td> <input type="text" name="nombre9" id="nombre9" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta9" id="cuenta9" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono9" id="telefono9" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo9" id="correo9" placeholder="Correo"> </td>
			  <td> <select name="Carrera9" id="Carrera9" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno10 -->
            <tr>
			  <td> 10 </td>
			  <td> <input type="text" name="nombre10" id="nombre10" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta10" id="cuenta10" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono10" id="telefono10" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo10" id="correo10" placeholder="Correo"> </td>
			  <td> <select name="Carrera10" id="Carrera10" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			<!--Alumno11 -->
            <tr>
			  <td> 11 </td>
			  <td> <input type="text" name="nombre11" id="nombre11" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta11" id="cuenta11" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono11" id="telefono11" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo11" id="correo11" placeholder="Correo"> </td>
			  <td> <select name="Carrera11" id="Carrera11" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			
			
			<!--Alumno12 -->
            <tr>
			  <td> 12 </td>
			  <td> <input type="text" name="nombre12" id="nombre12" placeholder="Nombre"> </td>
			  <td> <input type="text" name="cuenta12" id="cuenta12" placeholder="N0. Cuenta"> </td>
			  <td> <input type="text" name="telefono12" id="telefono12" placeholder="Telefono"> </td>
			  <td> <input type="text" name="correo12" id="correo12" placeholder="Correo"> </td>
			  <td> <select name="Carrera12" id="Carrera12" placeholder="">						
				   <option value="Ing. en Informática">Ing. en Informática</option>
				   <option value="Lic. en Administración de Empresas">Lic. en Administración de Empresas</option>
                   <option value="Lic. en Turismo">Lic. en Turismo</option>
				   <option value="Lic. en Diseño Gráfico">Lic. en Diseño Gráfico</option>
				   <option value="Lic. en Derecho">Lic. en Derecho</option>
				   <option value="Lic. en Mercadotécnia">Lic. en Mercadotécnia</option>
				   <option value="Lic. en Contaduría y Finanzas">Lic. en Contaduría y Finanzas</option>
				   <option value="Lic. en Recursos Humanos">Lic. en Recursos Humanos</option>
                   </select>
		     </td>
			</tr>
			<tr>Nombre del Grupo: <input type="text" name="grupo" id="grupo" value="" placeholder="Nombre del Grupo"><br></tr>
			<tr>Torneo:
			<?php 
			//mysql17.000webhost.com","a8060626_12","cdfn33
            $conexion=mysql_connect("db4free.net","ceutec","ceutec") or
            die("Problemas en la conexion");
            mysql_select_db("ceutec",$conexion) or//a8060626_12
           die("Problemas en la selección de la base de datos");

          $clavebuscada=mysql_query("select nombre from torneo",$conexion) or
            die("Problemas en el select:".mysql_error());
           echo "<select name='torneos' id='torneos'>";
		   while($row = mysql_fetch_array($clavebuscada))
           { echo "<option value='".$row['nombre']."'>".$row['nombre']."</option>";
              
                         }echo "</select>";

			?><br><br></tr>
	     </table>
		 </ol>

						<input type="submit" value="Registrarse" <?php if($_SESSION['Ucarrera']==""){echo "disabled";} ?>>
                        </form></section>
						<div id="msj" name="msj"></div>
						<div id="msj2"><?php if($_SESSION['Ucarrera']==""){echo "Por seguridad, para hacer registrar tu grupo nesecitas iniciar sesion"; } ?></div>
                    </article><br>

   
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

    

	
	
	


<!-- Inicio php insert -->
<?php                  //db4free.net","ceutec","ceutec"
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or
 die("Problemas en la conexion");
mysql_select_db("ceutec",$conexion) or
  die("Problemas en la selección de la base de datos");
 // echo "< script>alert('ok');</script>";
 
   $clavebuscada=mysql_query("select NombreEquipo from Equipos where NombreEquipo = '$_REQUEST[grupo]'",$conexion) or
  die("Problemas en el select:".mysql_error());


 //echo "<br>antes del whil:----------------------------------------";
  session_start();
  $n="";
 while($row = mysql_fetch_array($clavebuscada))
  {
  
  
  
  
 $n = $row['NombreEquipo'];
  
  }
 
  
  if($n!=$_REQUEST[grupo] and $_REQUEST[grupo]!= "" and $_REQUEST[torneos]!= "" and "" != $_REQUEST[nombre1] and $_REQUEST[cuenta1] != "" and $_REQUEST[telefono1] !="" and $_REQUEST[correo1]!="" and $_REQUEST[Carrera1]!="" and strlen($_REQUEST[cuenta1])==8 and
     "" != $_REQUEST[nombre2] and $_REQUEST[cuenta2] != "" and $_REQUEST[telefono4] !="" and $_REQUEST[correo4]!="" and $_REQUEST[Carrera6]!="" and strlen($_REQUEST[cuenta7])==8 and
"" != $_REQUEST[nombre5] and $_REQUEST[cuenta4] != "" and $_REQUEST[telefono3] !="" and $_REQUEST[correo2]!="" and $_REQUEST[Carrera2]!="" and strlen($_REQUEST[cuenta3])==8 and
"" != $_REQUEST[nombre2] and $_REQUEST[cuenta3] != "" and $_REQUEST[telefono4] !="" and $_REQUEST[correo5]!="" and $_REQUEST[Carrera7]!="" and strlen($_REQUEST[cuenta8])==8 and strlen($_REQUEST[cuenta2])==8	 )
  {

 
  //------  
   
 
   $cdclavebuscada=mysql_query("select periodo from torneo where nombre = '$_REQUEST[torneos]'",$conexion) or
 die("Problemas en el select:".mysql_error());
     $FT="";
	 while($row = mysql_fetch_array($cdclavebuscada))
  {  $FT="".$row['periodo'];       }
 
   
   
   
   
 $registros=mysql_query("insert into gt(torneo,grupo,fecha) values ('$_REQUEST[torneos]','$_REQUEST[grupo]','$FT')",$conexion) or
  die("Problemas Registrando datos en gtt:".mysql_error());

    //FIN INSERT torneo_________
  
  //--- inser grupo
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre1]','$_REQUEST[cuenta1]','$_REQUEST[telefono1]','$_REQUEST[correo1]','$_REQUEST[Carrera1]')",$conexion) or
  die("Problemas Registrando datos en grupo:".mysql_error());
  
  
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre2]','$_REQUEST[cuenta2]','$_REQUEST[telefono2]','$_REQUEST[correo2]','$_REQUEST[Carrera2]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre3]','$_REQUEST[cuenta3]','$_REQUEST[telefono3]','$_REQUEST[correo3]','$_REQUEST[Carrera3]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre4]','$_REQUEST[cuenta4]','$_REQUEST[telefono4]','$_REQUEST[correo4]','$_REQUEST[Carrera4]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre5]','$_REQUEST[cuenta5]','$_REQUEST[telefono5]','$_REQUEST[correo5]','$_REQUEST[Carrera5]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre6]','$_REQUEST[cuenta6]','$_REQUEST[telefono6]','$_REQUEST[correo6]','$_REQUEST[Carrera6]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre7]','$_REQUEST[cuenta7]','$_REQUEST[telefono7]','$_REQUEST[correo7]','$_REQUEST[Carrera7]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre8]','$_REQUEST[cuenta8]','$_REQUEST[telefono8]','$_REQUEST[correo8]','$_REQUEST[Carrera8]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre9]','$_REQUEST[cuenta9]','$_REQUEST[telefono9]','$_REQUEST[correo9]','$_REQUEST[Carrera9]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre10]','$_REQUEST[cuenta10]','$_REQUEST[telefono10]','$_REQUEST[correo10]','$_REQUEST[Carrera10]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
    $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre11]','$_REQUEST[cuenta11]','$_REQUEST[telefono11]','$_REQUEST[correo11]','$_REQUEST[Carrera11]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
    $registros=mysql_query("insert into Equipos(NombreEquipo,nombre,cuenta,telefono,correo,carrera) values ('$_REQUEST[grupo]','$_REQUEST[nombre12]','$_REQUEST[cuenta12]','$_REQUEST[telefono12]','$_REQUEST[correo12]','$_REQUEST[Carrera12]')",$conexion) or
  die("Problemas Registrando datos en grupot:".mysql_error());
  
  //fin inser grupo
  
echo '<script>document.getElementById("msj").innerHTML = "Se a registrado en el torneo<br>gracias por participar.";</script>'; 

  
   } else {
  
   if($_REQUEST[grupo]!=""){
   echo '<script>document.getElementById("msj").innerHTML = "NOTA: Introducir todos los datos.";</script>';
                              }
							  else{
	//echo '<script>document.getElementById("msj").innerHTML = "NOTA: Introducir Nombre del grupo.";</script>';						  
							  }
echo '<script>document.getElementById("grupo").value = "'.$_REQUEST[grupo].'";</script>';

   
   echo '<script>document.getElementById("nombre1").value = "'.$_REQUEST[nombre1].'";</script>';
   echo '<script>document.getElementById("cuenta1").value = "'.$_REQUEST[cuenta1].'";</script>';
   echo '<script>document.getElementById("telefono1").value = "'.$_REQUEST[telefono1].'";</script>';
   echo '<script>document.getElementById("correo1").value = "'.$_REQUEST[correo1].'";</script>';
   echo '<script>document.getElementById("Carrera1").value = "'.$_REQUEST[Carrera1].'";</script>';
   
   echo '<script>document.getElementById("nombre2").value = "'.$_REQUEST[nombre2].'";</script>';
   echo '<script>document.getElementById("cuenta2").value = "'.$_REQUEST[cuenta2].'";</script>';
   echo '<script>document.getElementById("telefono2").value = "'.$_REQUEST[telefono2].'";</script>';
   echo '<script>document.getElementById("correo2").value = "'.$_REQUEST[correo2].'";</script>';
   echo '<script>document.getElementById("Carrera2").value = "'.$_REQUEST[Carrera2].'";</script>';
   
   echo '<script>document.getElementById("nombre3").value = "'.$_REQUEST[nombre3].'";</script>';
   echo '<script>document.getElementById("cuenta3").value = "'.$_REQUEST[cuenta3].'";</script>';
   echo '<script>document.getElementById("telefono3").value = "'.$_REQUEST[telefono3].'";</script>';
   echo '<script>document.getElementById("correo3").value = "'.$_REQUEST[correo3].'";</script>';
   echo '<script>document.getElementById("Carrera3").value = "'.$_REQUEST[Carrera3].'";</script>';
   
   echo '<script>document.getElementById("nombre4").value = "'.$_REQUEST[nombre4].'";</script>';
   echo '<script>document.getElementById("cuenta4").value = "'.$_REQUEST[cuenta4].'";</script>';
   echo '<script>document.getElementById("telefono4").value = "'.$_REQUEST[telefono4].'";</script>';
   echo '<script>document.getElementById("correo4").value = "'.$_REQUEST[correo4].'";</script>';
   echo '<script>document.getElementById("Carrera4").value = "'.$_REQUEST[Carrera4].'";</script>';
   
   echo '<script>document.getElementById("nombre5").value = "'.$_REQUEST[nombre5].'";</script>';
   echo '<script>document.getElementById("cuenta5").value = "'.$_REQUEST[cuenta5].'";</script>';
   echo '<script>document.getElementById("telefono5").value = "'.$_REQUEST[telefono5].'";</script>';
   echo '<script>document.getElementById("correo5").value = "'.$_REQUEST[correo5].'";</script>';
   echo '<script>document.getElementById("Carrera5").value = "'.$_REQUEST[Carrera5].'";</script>';
   
   echo '<script>document.getElementById("nombre6").value = "'.$_REQUEST[nombre6].'";</script>';
   echo '<script>document.getElementById("cuenta6").value = "'.$_REQUEST[cuenta6].'";</script>';
   echo '<script>document.getElementById("telefono6").value = "'.$_REQUEST[telefono6].'";</script>';
   echo '<script>document.getElementById("correo6").value = "'.$_REQUEST[correo6].'";</script>';
   echo '<script>document.getElementById("Carrera6").value = "'.$_REQUEST[Carrera6].'";</script>';
   
   echo '<script>document.getElementById("nombre7").value = "'.$_REQUEST[nombre7].'";</script>';
   echo '<script>document.getElementById("cuenta7").value = "'.$_REQUEST[cuenta7].'";</script>';
   echo '<script>document.getElementById("telefono7").value = "'.$_REQUEST[telefono7].'";</script>';
   echo '<script>document.getElementById("correo7").value = "'.$_REQUEST[correo7].'";</script>';
   echo '<script>document.getElementById("Carrera7").value = "'.$_REQUEST[Carrera7].'";</script>';
   
   echo '<script>document.getElementById("nombre8").value = "'.$_REQUEST[nombre8].'";</script>';
   echo '<script>document.getElementById("cuenta8").value = "'.$_REQUEST[cuenta8].'";</script>';
   echo '<script>document.getElementById("telefono8").value = "'.$_REQUEST[telefono8].'";</script>';
   echo '<script>document.getElementById("correo8").value = "'.$_REQUEST[correo8].'";</script>';
   echo '<script>document.getElementById("Carrera8").value = "'.$_REQUEST[Carrera8].'";</script>';
   
   echo '<script>document.getElementById("nombre9").value = "'.$_REQUEST[nombre9].'";</script>';
   echo '<script>document.getElementById("cuenta9").value = "'.$_REQUEST[cuenta9].'";</script>';
   echo '<script>document.getElementById("telefono9").value = "'.$_REQUEST[telefono9].'";</script>';
   echo '<script>document.getElementById("correo9").value = "'.$_REQUEST[correo9].'";</script>';
   echo '<script>document.getElementById("Carrera9").value = "'.$_REQUEST[Carrera9].'";</script>';
   
   echo '<script>document.getElementById("nombre10").value = "'.$_REQUEST[nombre10].'";</script>';
   echo '<script>document.getElementById("cuenta10").value = "'.$_REQUEST[cuenta10].'";</script>';
   echo '<script>document.getElementById("telefono10").value = "'.$_REQUEST[telefono10].'";</script>';
   echo '<script>document.getElementById("correo10").value = "'.$_REQUEST[correo10].'";</script>';
   echo '<script>document.getElementById("Carrera10").value = "'.$_REQUEST[Carrera10].'";</script>';
   
   echo '<script>document.getElementById("nombre11").value = "'.$_REQUEST[nombre11].'";</script>';
   echo '<script>document.getElementById("cuenta11").value = "'.$_REQUEST[cuenta11].'";</script>';
   echo '<script>document.getElementById("telefono11").value = "'.$_REQUEST[telefono11].'";</script>';
   echo '<script>document.getElementById("correo11").value = "'.$_REQUEST[correo11].'";</script>';
   echo '<script>document.getElementById("Carrera11").value = "'.$_REQUEST[Carrera11].'";</script>';
   
   echo '<script>document.getElementById("nombre12").value = "'.$_REQUEST[nombre12].'";</script>';
   echo '<script>document.getElementById("cuenta12").value = "'.$_REQUEST[cuenta12].'";</script>';
   echo '<script>document.getElementById("telefono12").value = "'.$_REQUEST[telefono12].'";</script>';
   echo '<script>document.getElementById("correo12").value = "'.$_REQUEST[correo12].'";</script>';
   echo '<script>document.getElementById("Carrera12").value = "'.$_REQUEST[Carrera12].'";</script>';
   
   
    if (strlen($_REQUEST[cuenta1]!=8) and $_REQUEST[correo1]!="")
   {
   echo '<script>document.getElementById("msj").innerHTML = "Introdujo algun Numero de cuenta incorrecto.";</script>';
   }
   
   
   if($n==$_REQUEST[grupo] and $_REQUEST[grupo]!="")
     {echo '<script>document.getElementById("msj").innerHTML = "El nombre del grupo ya esta en uso.";</script>';}
  
  }

  
  
  
  
  
  
mysql_close($conexion);
  
  ?>
<!-- Fin php insert -->
</body>
</html>
