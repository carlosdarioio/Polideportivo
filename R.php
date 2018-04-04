<?php
$pp2 = "login.php";
session_start();
//
/*
$conexion=mysql_connect("localhost","root","") or
 die("Problemas en la conexion");

mysql_select_db("js",$conexion) or die("Problemas en la selección de la base de datos");
$clavebuscada=mysql_query("select tipo from usuario where nick = '$_SESSION[nickk]'",$conexion) or
  die("Problemas en el select:".mysql_error());

while($row = mysql_fetch_array($clavebuscada))
  {  
    $tip = $row['tipo'];
  }
//
*/
if(!isset($_SESSION['tip'])){
 header("Location: Registro_alm.php");
} else{

if($tip=='Alumnos'){
header("Location: Registro_alm.php");}
if($tip=='Administrador'){
header("Location: Registro_A.php");}

}
 echo "entro";
?>