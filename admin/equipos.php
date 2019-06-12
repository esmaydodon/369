<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include '../func/funciones.php';
include 'login.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>REGISTRAR MATERIAL</title>
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
                <li><a href='listar_movimientos.php'>LISTAR MOVIMIENTOS</a></li>
          <li><a  href='destruir.php' class='current'>SALIR</a></li>
          
    </ul>
  <!-- end of menu -->
</div>
</div>
<div id="content_wrapper"><!-- end of sidebar --> 
  <div id="content">
    <div class="content_box_panel">
  
<!--<span id="listar_personal" class="button mediano azul" onclick="listarEquiposPrestados()">LISTAR EQUIPOS PRESTADOS</span>-->
<div id="formulario_EquiposPrestar"></div> 
 <div id="formularioBuscadorPotencial"  >
    </div> 
<div id="listarEquiposPrestados" class="listarDocumentos"></div>
<div id="formulario_envioDJ">
    <form action="registrando_material.php" name="form_personal_utc" method="post" class="contacto" enctype="multipart/form-data" >
            <table border="0">
                 <tr>
                <td>MATERIAL:</td>
                <td><input name="nombre_equipo_bd" type="text" id="nombre_equipo_bd" size="30"></td>
              </tr>
                <tr>
                    <td>
                        CÒDIGO MATERIAL:
                    </td>
                    <td>
                     <input name="equipos_codigo_bd" type="text" id="equipos_codigo_bd" size="30">
                    </td>
                </tr>
                <tr>
                    <td>
                        CANTIDAD MATERIAL:
                    </td>
                    <td>
                     <input name="ingreso_total_bd" type="text" id="ingreso_total_bd" size="30">
                    </td>
                </tr>
             
	            <tr>
                <td>UNIDAD</td>
                <td>
    <select id ='equipos_unidadm_bd' name='equipos_unidadm_bd' class='select' >
	 <option value='0'>Seleccione</option>";
	<option  value='KG'>KG</option>
  <option  value='PZA'>PZA</option>
  <option  value='Unid'>UNID</option>
  <option  value='M'>M</option>
  </select></td>
              </tr> 

          
  <tr>
                <td><input type="submit" value="REGISTRAR" class="button mediano azul"></td>
                <!--    <span  id="listar_personal" onclick="listarFormatos()">LISTAR FORMATOS</span>-->
              </tr>
            </table>
           
          </form>
</div>
    </div>
  </div>
</div>
<div id="footer_wrapper">
  <div id="footer">
Copyright &copy; 2017 <a href="http://www.kuraka.net/">kuraka.org</a></div>
</div>
</body>
</html>


