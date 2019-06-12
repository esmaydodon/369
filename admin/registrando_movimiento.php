<?php 
include("../func/funciones.php");
/* @var $_POST type */
$idequipos_bd=quitar($_POST[idequipos_bd]);
$movimiento_tipo=quitar($_POST[movimiento_tipo]);
$cantidad_ingreso=quitar($_POST[cantidad_ingreso]);
$empresa_transportes_bd=quitar($_POST[empresa_transportes_bd]);
$guia_trancito=quitar($_POST[guia_trancito]);
$rgn_bd=quitar($_POST[rgn_bd]);
$obra=quitar($_POST[obra]);
$cantidad_salida=quitar($_POST[cantidad_salida]);
$autorizado_por_bd=quitar($_POST[autorizado_por_bd]);
$solicitado_por_bd=quitar($_POST[solicitado_por_bd]);
$antregado_a=quitar($_POST[antregado_a]);
$progresiva=quitar($_POST[progresiva]);
$documento_salida_bd=quitar($_POST[documento_salida_bd]);

$textfechaguia= strtotime($_POST['fecha_movimiento_bd']);
$fecha_movimiento_bd =date('Y-m-d',$textfechaguia);

if ($movimiento_tipo==1) {
	$consulta = "INSERT INTO movimiento_bd (cantidad_ingreso, empresa_transportes_bd,guia_trancito,rgn_bd,obra,idequipos_bd,fecha_movimiento_bd) 
	VALUES ('$cantidad_ingreso','$empresa_transportes_bd','$guia_trancito','$rgn_bd','$obra','$idequipos_bd','$fecha_movimiento_bd')";
	//consultamos el stock actual del material por su id
	$consulta_material_stock= dime("SELECT stock_actual_equipo_bd FROM equipos_bd  where `idequipos_bd`=".$idequipos_bd);
//	$NuevaCantidad =($cantidad_ingreso+);
	//echo $consulta; 
	$result = dime($consulta)or die(mysql_error());	
}elseif ($movimiento_tipo==2) {
$consulta = "INSERT INTO movimiento_bd (cantidad_salida, obra,autorizado_por_bd, solicitado_por_bd,antregado_a,progresiva,idequipos_bd,documento_salida_bd,fecha_movimiento_bd) 
    VALUES ('$cantidad_salida','$obra','$autorizado_por_bd','$solicitado_por_bd','$antregado_a','$progresiva','$idequipos_bd','$documento_salida_bd','$fecha_movimiento_bd')";
	//echo $consulta; 
	$result = dime($consulta)or die(mysql_error());	
}
 echo "<script>document.location.href='equipos.php'</script>";
    ?>