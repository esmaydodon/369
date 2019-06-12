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
<script >
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
<div id="formularioBuscadorEquipo">
    <form name="frmbusquedaequipo" onkeypress="buscarEquipo();" class="contacto">
<input value="1" name="dedoc" type="hidden">
<input value="45" name="idusuarioPotencial" type="hidden">
<!--emviar tambien el id de docuimento para ppsar el id por el link editar-->
Buscar Equipo / Producto:
  <input name="dato" id="dato" type="text">
  <fieldset>
 <div id="resultadoBusquedaEquipo"></div>
  </fieldset>
  </form>
    </div>
<div id="formulario_envioDJ">
    <form action="registrando_movimiento.php" name="form_personal_utc" method="post" class="contacto" enctype="multipart/form-data" >
            <table border="0">
               <tr>
                    <td>
                        MATERIAL:
                    </td>
                    <td>
                        <div id="detalleEquipo">DETALLE MATERIAL </div> 
                    </td>
                </tr>
                 <tr>
                <td>FECHA MOVIMIENTO:</td>
                <td><input name="fecha_movimiento_bd" type="text" id="fecha_de_envio_documento_bd" size="15" value="<?php echo date("Y-m-d");?>" /></td>
              </tr> 
                    <tr>
                <td>MOVIMIENTO</td>
                <td>
    <select id ='movimiento_tipo' name='movimiento_tipo' class='select' onchange="mostrarIngresoMaterial()" >
   <option value='0'>SELECCIONE</option>";
  <option  value='1'>INGRESO</option>
  <option  value='2'>SALIDA</option>
  </select></td>
              </tr>                 

                
            
            </table>
<div id="camposingreso">369</div>   
           
             <input type="submit" value="REGISTRAR" class="button mediano azul">
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


