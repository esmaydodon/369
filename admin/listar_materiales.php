<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include '../func/funciones.php';
include 'login.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LISTAR MATERIALES</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../js/ajax.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<!--data piker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"></link>
<script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript"  src="../js/jquery-ui.js"></script>

<!--data piker end-->
<script type="text/javascript" src="../js/jquery.PrintArea.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){  
$('#listar_personal').click(function(){
           $('#listarDocumentos').css("display", "block");
	  $('#formulario_envioDJ').css('display', 'none');
	$("#formulario_potencialEditar").css("display", "none");
   });	
$("#pedir").click(function(){
	$("#formulario_envioDJ").css("display", "none");
       // $("#listarDocumentos").css("display", "none");
        $("#formulario_potencialEditar").css("display", "block");
  });  
  //para exportar al exel	
 
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});
}); 
 
</script>
<script>
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '<Ant',
 nextText: 'Sig>',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'yy/mm/dd',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$("#fecha_de_envio_documento_bd").datepicker({
	showOn: 'both',
      changeMonth: true,
      changeYear: true
    });

});
</script>
</head>
<body>
<div id="header_wrapper">
  <div id="header_wrapper">
  <div id="header">
    <div style="float: left;">
      <h1> 
       <h1><strong class="MANTRA"> SISTEMA DE INVENTARIO MATERIALES</strong></h1> 
      </h1>
    </div>
  
   <div style="float: right;">
     <?php  //include('ya.php'); ?>
   </div>
  
  </div>
  <!-- end of header -->
</div>
  <!-- end of header -->
</div>
<!-- end of menu_wrapper -->
<div id="menu_wrapper">
<div id="menu"> 
 <ul>
                <li><a href='equipos.php'>REGISTRAR MATERIAL</a></li>
                <li><a href='listar_materiales.php'>LISTAR METERIALES</a></li>
                <li><a href='control_almacen.php'>CONTROL DE ALMACEN</a></li>
                <li><a href=''>LISTAR MOVIMIENTOS</a></li>
          <li><a  href='destruir.php' class='current'>SALIR</a></li>
          
    </ul>
  <!-- end of menu -->
</div>
</div>
<div id="content_wrapper"><!-- end of sidebar --> 
  <div id="content">
    <div class="content_box_panel">
<!--<span id="listar_personal" class="button mediano azul" onclick="listarEquiposPrestados()">LISTAR EQUIPOS PRESTADOS</span>-->
<?php
include("../func/funciones.php");
$idc = $_POST['id'];
#para paginar
$RegistrosAMostrar=20;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar

###############################################################################3 
       $consulta = dime("SELECT * FROM equipos_bd ORDER BY idequipos_bd desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar");
echo "  <div class='section'>
        <table width='900px' border='1' class='tabla' id='Exportar_a_Excel'>
        <div class='' >	
         <tr class='encabezado' >
            <td>idequipos_bd</td>
            <td>equipos_codigo_bd</td>
            <td>nombre_equipo_bd</td>
            <td>equipos_unidadm_bd</td>
            <td>salida_total_bd</td>
            <td>ingreso_total_bd</td>
            <td>stock_actual_equipo_bd</td>
         </tr>";
while($productos = mysql_fetch_array($consulta)){
	$cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	echo "<tr><td>". $productos['idequipos_bd']."</td>
            <td>". $productos['equipos_codigo_bd']."</td>
                <td>".$productos['nombre_equipo_bd']."</td>
                <td>".$productos['equipos_unidadm_bd']."</td>
                <td>".$productos['salida_total_bd']."</td>
                <td>".$productos['ingreso_total_bd']."</td>
                <td>".$productos['stock_actual_equipo_bd'];
  }
      #paginar	
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM equipos_bd"));
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;
//desplazamiento
        echo"
<tr><td colspan='6' ><div style='margin-left: 121px;'>
<div  style=' clear:both; width:100%;'>
<a style=' float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('1')\">Primero</a> ";
 if($PagAct>1) echo "<a style=' float: left; text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagUlt')\">Ultimo</a></div>";       
        echo "
<div></td></tr>            
</table>  </div>
<form action='cficheroExcel.php' method='post' target='_blank' id='FormularioExportacion'>
<p>Exportar a Excel  <img src='imagenes/panel/export_to_excel.gif' class='botonExcel' /></p>
<input type='hidden' id='datos_a_enviar' name='datos_a_enviar' />
<a href='javascript:void(0)' class='prints' title='imprimir'>
       <img src=' ' alt='edit' />imprimir reporte</a>
</form>
    
";
    ?>
        

    </div>
  </div>
</div>
<div id="footer_wrapper">
  <div id="footer">
Copyright &copy; 2019 <a href="http://www.kuraka.net/">www.martoss.com</a></div>
</div>
</body>
</html>


