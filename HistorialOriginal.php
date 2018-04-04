<?php session_start();?>
<!DOCTYPE html>

<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
window.location = "movil/m.Historial.php";

}
else
{

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Historial</title>

</head>
<body>
<div class="CONT" align="center" >
<?php
$hoydia = date("d");
//echo "1:".$hoydia;

$hoymes = date("m");
//echo "<br>2:".$hoy2;

$hoyanyo = date("y");
//echo "<br>3:".$hoy3;



//Creando conexion
$conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
//seleccionando base
mysql_select_db("ceutec",$conexion) or die("Problemas en la selección de la base de datos");

//insertando datos de la base de datos 
list($anio, $mes, $dia) = explode("-",$_REQUEST[Calendario]); 
$clavebuscadah=mysql_query("delete from reto where dia<=$hoydia and mes<=$hoymes and anyo<=$hoyanyo",$conexion) or
die("Problemas en el delete1:".mysql_error());

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
        <li> <a href="Historial.html"> Historial </a> </li>
        
    </ul>

            </div>
            <div id="ColumnaCentro">
                
    
   <!-- 
     $_SESSION['Unombre']
  $_SESSION['Ucorreo']
  $_SESSION['Ucarrera']------------------- -->


   
   <!-- --------------------- -->
   	  <fieldset class="contact">
	
	<p>Por este medio podras ver tu historial<br> en sentido
						a todas las veces que ha solicitado cancha al polideportivo.</p>
	 
	 <br><br>
	 <table style="width:6%; border-spacing:1; ">
		 
		    <tr>
		     <th>Cancha</th>
			 <th>Fecha</th>
		     <th>Hora</th>
			 <th> Estado </th>
		    </tr>
	<?php  
	  $conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
	  mysql_select_db("ceutec",$conexion) or//a8060626_12
      die("Problemas en la selección de la base de datos");
      $clavebuscada=mysql_query("select id,hora,cancha,estado,anyo,mes,dia from solicitud where numerocuenta='$_SESSION[cuenta]'",$conexion) or
      die("Problemas en el select:".mysql_error());


      while($row = mysql_fetch_array($clavebuscada))
      {
         $row['cancha'];
		  $rr="";
		 if($_SESSION['Ucarrera']==""){$rr= "disabled";}
		
		echo'<form action="#" method="post">
		       <input type="hidden" value="'.$row['id'].'" name="ID" id="ID">
			   <input type="hidden" value="'.$row['numerocuenta'].'" name="NMC" id="NMC">
   		      <tr>
			     <td> <input type="text" value="'.$row['cancha'].'" id="cancha" name="cancha" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['dia'].'/'.$row['mes'].'/'.$row['anyo'].'" id="Calendario" name="Calendario" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['hora'].'" id="hora" name="hora" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['estado'].'" id="estado" name="estado" readonly="readonly"></td>
			  </tr>
			 </form>';
		
		 
         
		 }
	
	
	
	
	?> </table>
	
	   </fieldset><fieldset class="contact">
	<p>Por este medio podras ver tu historial<br> en sentido
	a todos las veces que ha asistido a los torneos del polideportivo.</p>
	 
	 <br><br>
	 <table style="width:6%; border-spacing:1; ">
		 
		    <tr>
		     <th>Torneo</th>
			 <th>Grupo</th>
		     <th>Fecha</th>
			
		    </tr>
	<?php  
	$conexion=mysql_connect("db4free.net","ceutec","ceutec") or die("Problemas en la conexion");
	  mysql_select_db("ceutec",$conexion) or//a8060626_12
      die("Problemas en la selección de la base de datos");
	
	/**/
	 $clavebuscada=mysql_query("select grupo from grupo where cuenta='$_SESSION[cuenta]'",$conexion) or
      die("Problemas en el select:".mysql_error());


      while($row2 = mysql_fetch_array($clavebuscada))
      {
	    $GR=$row2['grupo'];
	  /*-------------------------------------------------*/
	    $clavebuscadaaa=mysql_query("select id,torneo,grupo,fecha from gt where grupo='$GR'",$conexion) or
      die("Problemas en el select gr:".mysql_error());


      while($row = mysql_fetch_array($clavebuscadaaa))
      {
        
		 if($_SESSION['Ucarrera']==""){$rr= "disabled";}
		
		echo'<form action="#" method="post">
		       <input type="hidden" value="'.$row['id'].'" name="ID" id="ID">
			   <input type="hidden" value="'.$row['numerocuenta'].'" name="NMC" id="NMC">
   		      <tr>
			     <td> <input type="text" value="'.$row['torneo'].'" id="cancha" name="cancha" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['grupo'].'" id="Calendario" name="Calendario" readonly="readonly"> </td>
				 <td> <input type="text" value="'.$row['fecha'].'" id="hora" name="hora" readonly="readonly"> </td>
				 
			  </tr>
			 </form>';
		
		 
         
		 }
	  /*-------------------------------------*/
	  }
	/**/
	
	  
    
	
	
	
	
	?> </table>
						
	<div id="msj"></div>
	<br>
	<div id="msj2"><?php if($_SESSION['Ucarrera']==""){echo "Para ver tu historial Nesecitas iniciar sesion"; } ?></div>
	
    </fieldset>
   <p>Esperamos que sigas participando</p>
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
                <a title="Scroll to the top" class="top" href="#"><img src="top.png" alt="top" /></a>
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

<!-- Fin php insert -->
</body>
</html>