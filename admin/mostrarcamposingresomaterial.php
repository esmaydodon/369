<?Php
include("../func/funciones.php");
//ingreso 1, salida 2, devolucion 3
$idp=$_GET['idp'];
if ($idp==1) {
	echo" <table border='0'>
	<tr>
        <td>
            CANTIDAD:
        </td>
        <td>
            <input name='cantidad_ingreso' type='text' id='cantidad_ingreso' size='30'>
        </td>
    </tr> 
 	<tr>
	    <td>
	   	 EMPRESA TRANSPORTES:
	    </td>
	    <td>
	  		<input name='empresa_transportes_bd' type='text' id='empresa_transportes_bd' size='30'>
	    </td>
    </tr>
    <tr>
        <td>
            N° GUIA DE TRANCITO:
        </td>
        <td>
            <input name='guia_trancito' type='text' id='guia_trancito' size='30'>
       </td>
    </tr>
    <tr>
        <td>
            RGN:
        </td>
        <td>
            <input name='rgn_bd' type='text' id='rgn_bd' size='30'>
        </td>
    </tr>
    <tr>
        <td>
            OBRA:
        </td>
        <td>
            <input name='obra' type='text' id='obra' size='30'>
            <input type='hidden' name='entrada' value='1'>
        </td>
    </tr>
    </table>";
}elseif ($idp==2) {
	echo" <table border='0'>
	<tr>
        <td>
            CANTIDAD:
        </td>
        <td>
            <input name='cantidad_salida' type='text' id='cantidad_salida' size='30'>
        </td>
    </tr> 
 	<tr>
	    <td>
	   	 AUTORIZADO POR:
	    </td>
	    <td>
	  		<input name='autorizado_por_bd' type='text' id='autorizado_por_bd' size='30'>
	    </td>
    </tr>
    <tr>
        <td>
            SOLICITADO POR:
        </td>
        <td>
            <input name='solicitado_por_bd' type='text' id='solicitado_por_bd' size='30'>
       </td>
    </tr>
    <tr>
        <td>
            ENTREGADO A:
        </td>
        <td>
            <input name='antregado_a' type='text' id='antregado_a' size='30'>
        </td>
    </tr>
    <tr>
        <td>
            OBRA:
        </td>
        <td>
            <input name='obra' type='text' id='obra' size='30'>
        </td>
    </tr>
    <tr>
        <td>
            PROGRESIVA:
        </td>
        <td>
            <input name='progresiva' type='text' id='progresiva' size='30'>
        </td>
    </tr>
     <tr>
        <td>
            DOCUMENTO DE SALIDA:
        </td>
        <td>
            <input name='documento_salida_bd' type='text' id='documento_salida_bd' size='30'>
            <input type='hidden' name='salida' value='1'>
        </td>
    </tr>
    </table>";
}

?>
 	 
 	
 	
             
    