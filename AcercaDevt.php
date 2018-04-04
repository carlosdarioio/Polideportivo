<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="estilos.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
window.location = "movil/m.AcercaDe.php";

}
else
{

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AcercaDe</title>

</head>
<body>
<div class="CONT" align="center" >

    <form method="post" action="Reservacion.php" id="form1">


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
        <li> <a href="AcercaDe.php">AcercaDe </a> </li>
    </ul>

            </div>
            <div id="ColumnaCentro">
                
                 <!-- .......... -->
				 
                 <article class="contact">
				 <h1>Informacion:</h1>
				 En caso querer establecer contacto con los encargados del area<br>
				 aqui se muestra informacion sobre ellos:
				 <section class="contact">
        <header>
            <h3>Felix Ramirez:</h3>
        </header>
        <p>
            <span class="label">Correo: Felixramirez@unitec.edu </span>
            <br><span>Celular: 32829532</span>
        </p>
     
    </section>

	
	
    <section class="contact">
        <header>
             <h3>Alina Luque:</h3>
        </header>
       
            <span class="label">Correo: alina_luque@unitec.edu</span>
           <br> <span>Celular: 98149376</span>
    </section>
     <section class="contact">
        <header>
            <h3>Horarios de atencion:</h3>
        </header>
        <p>        
           Lunes a Viernes:
		   <br>2:00 P.M. a 09:00 P.M<br>
           <br>Sabado:<br>
		   8:00 A.M. a 12:00 P.M 
		   </p>
		
	</section>
	<section class="contact">
           <header><h3>Redes sociales:</h3>   </header>
            <a runat="server" href="#">Google+</a><br>
            <a runat="server" href="www.facebook.com/aeiicba">Facebook</a></p>
        
    </section>
    <section class="contact">
        <header>
            <h3>Address:</h3>
        </header>
        <p>        
           Pagina creada por el grupo: INGTECS
		   <br>Integrantes:<br>
		   Erwing Caceres<br>
		   Rony Rodriguez<br>
		   Carlos Flores<br>
		   Raul Lopez<br>
        </p>
		
	</section>	

       
        

       
    </article>

    

    
                  <!-- ....... -->
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

    </form>
	
	
	</div>
</body>
</html>
