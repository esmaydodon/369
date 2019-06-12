<?php

/* Marlon Martos Quiroz
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * newtechperu.com
 */
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=ficheroExcel.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo $_POST['datos_a_enviar'];
?>
