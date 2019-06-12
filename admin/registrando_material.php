<?php 
include("../func/funciones.php");
$nombre_equipo_bd=quitar($_POST[nombre_equipo_bd]);
$equipos_codigo_bd=quitar($_POST[equipos_codigo_bd]);
$ingreso_total_bd=quitar($_POST[ingreso_total_bd]);
$equipos_unidadm_bd=quitar($_POST[equipos_unidadm_bd]);

###################para  guardar en bd la consulta 
 
$consulta = "INSERT INTO equipos_bd (equipos_codigo_bd, nombre_equipo_bd, equipos_unidadm_bd, ingreso_total_bd)   VALUES 
('$equipos_codigo_bd','$nombre_equipo_bd','$equipos_unidadm_bd','$ingreso_total_bd')";
//echo $consulta; 
$result = dime($consulta)or die(mysql_error());	
 
 echo "<script>document.location.href='equipos.php'</script>";
 

    ?>