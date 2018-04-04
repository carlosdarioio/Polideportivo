<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
 <script>var cont=0;</script>
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

<script type="text/javascript">
	
   function DD()
   {
     CC(cont);
	 cont=cont+1;
	 if(cont>4){cont=0;}
    }


   function CC(num)
   {
	 var img=document.getElementById('cont_im');     
     contt=num;
	 if(contt==0){
	 img.src='img0.jpg';
	 		       }
				   
	
	if(contt==1){
	 img.src='img1.jpg';
	 		       }
	if(contt==2){
	 img.src='img2.jpg';
	 		       }
				   
	if(contt==3){
	 img.src='img3.jpg';
	 		       }
		 
		 }
		 
		 </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <script type="text/javascript" src="zepto.min.js" > </script>
<title>Principal</title>

</head>
<body>
<div class="CONT" align="center" >

    <form method="post" action="Principal.php" id="form1">


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
        <li> <a href="Principal.php">Inicio </a> </li>
    </ul>

            </div>
            <div id="ColumnaCentro">
                
  
	
	<ul>
	         
	
		<li>  
         

		<h2> Bienvenidos </h2>
		    Esta es una página incorporada para servicios relacionados con la cancha.<br>
			Por este medio podrás conocer información sobre los deportes que ofrecemos<br>
			en la universidad así como la opción para poder apartar la cancha con una<br>
			anticipación ya establecida según la solicitud, entre otras cosas, también<br>
			tendrán la opción de registrarse en los próximos eventos deportivos que se<br>
			llevaran a cabo en la universidad por este medio, y retar a otras personas<br>
			en el deporte. ------ya
			<br>
			<img id="cont_im" src="ceut.png"  width='490' height='200'>
		</li>
	
    
        <li>
            <h3>Solicitud del área</h3>
            Para poder solicitar alguna cancha debes ser estudiante universitario además<br>
			de registrare por este link:  <a href="Registro_alm.php">Regístrate </a> solo necesitaras ingresar los datos <br>
			requeridos y así podrás solicitar tu cancha de manera online: <a href="Reservacion.php">Reservación </a> .--ya

        </li><!--- Desplazar hacia arriba-->
        <li>
             <h3>Regístrate en los eventos</h3>
            Por esta página enlistaremos los eventos que se piensan llevar a cabo en la<br>
			universidad, a los cuales por este medio te podrás registrar en el que te<br>
			interese llenando los respectivos datos que pidan. En caso quieras mirar los<br>
			eventos aquí el link: <a href="Torneo.php">Torneos</a>-ya
        </li>
		
		<li>
            <h3>Retos</h3>
            Te gusta el deporte y buscas personas con quienes enfrentarte, entonces<br>
			éntrale a los retos para registrarte en busque de tu siguiente rival<br>
			solo necesitas estar registrado he iniciar sesión para poder llenar los<br>
			datos sobre tu disponibilidad o acepta alguno de los tantos retos que otros<br>
			estudiantes ya han publicado aquí el link:  <a href="Reto.php">Retos</a>-ya
        </li>
		
		<li>
            <h3>Historial</h3>
            Quieres recordar todos los momentos en los que has sido parte de nuestra<br>
			actividad, te gustaría ver tu historial con respecto a las participaciones<br>
			de las cuales has sido parte, entonces éntrale al historial página en la cual<br>
			podrás ver una lista de todas las actividades de las cuales has sido parte.<br>
           Solo necesitas estar registrado he iniciar sesión aquí el link:
           <a href="Historial.php">Historial</a>
        </li>
		
        <li>
            <h3>Contacta los encargados</h3>
            Por este medio podrás ver información relacionada con los datos del<br>
			personal que elabora en el área deportiva y los encargados del<br>
			proyecto:  <a href="AcercaDe.php">AcercaDe</a>
        </li>
		
		<li>
            <h3>Inicia sesión</h3>
            Para poder utilizar los servicios que ofrece la página una vez te<br>
			registres se requerida iniciar sesión: <a href="loggin.php">loggin</a>--ya
        </li>
    </ul>

            </div>
            <div id="ColumnaDerecha">

                                <div id="Enlaces">
                     </div><div><?php //echo "".$_SESSION['cuenta'];?></div>
					 
					 				  <div id="ImagenLogo2">
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
				
                <span>&copy; 2014 - Solicitud para reservación de canchas del polideportivo
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
    </form>
	


	
	</div>
<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
	<!-- Cambiando anuncios -->
  <script type="text/javascript">
  DD();
  setInterval(DD,2000); 
 </script>
 <!-- Fin cambiando anuncion-->
</body>
</html>
