<?php
include '../func/funciones.php';
include 'login.php';
$idc = $_POST['id'];
$consulta= dime("SELECT * FROM equipos_bd  where `idequipos_bd`=".$idc);
while ($row = mysql_fetch_array($consulta)) {
    echo "<input type='hidden' name='idequipos_bd' value='$idc'>";
   echo "CODIGO:".$row['equipos_codigo_bd'].",STOCK ACTUAL:".$row['stock_actual_equipo_bd'].",UNIDAD:".$row['equipos_unidadm_bd']; 
}
?>