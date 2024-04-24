<html>
<head>
<title>CONSULTA CLIENTES</title> 
//<?php
//$email=$_GET["email"];
echo "CORREO DEL PROFESOR    ";
//echo $email;
include ("conexion.php"); //Incluye php  para conectarse a la base de datos
$link=Conectarse();
//?>
<table align="left" width="83%" border="2">
<tr BGCOLOR="#8080C0">
<td width="4%"><b><font color="#FFFFFF">IDENTIFICACIÓN</font></b></td> 
<td width="4%"><b><font color="#FFFFFF">NOMBRES</font></b></td> 
<td width="4%"><b><font color="#FFFFFF">APELLIDOS</font></b></td>
<td width="4%"><b><font color="#FFFFFF">TELÉFONO</font></b></td>
<td width="40%"> <b> <font color="#FFFFFF">CORREO</font> </b></td>
<td width="12%"><b><font color="#FFFFFF">DIRECCIÓN</font></b></td>

</tr>
<p>
	<p>
		<p>
	<a href="index.htm">REGRESAR</a>
/*<?php
  $resultado=mysqli_query($link,"select * from clientes");
  $numregistros = $resultado->num_rows;//guarda el numero de registros encontrados
  $k=0;
  ?>
  <p align="center">TOTAL CLIENTES: <? echo $numregistros; ?></p>
  <?php

     while($k<$numregistros)
     {
		$row=mysqli_fetch_row($resultado);
		$idcliente=$row[1];
  		$apellidos=$row[3];
		$nombres=$row[4];
		$dirección=$row[5];
  		$telefono=$row[6];
  		$email=$row[7];
	?>	

        <tr>
		<td width="4%"><?echo $idcliente?></td> 
		<td width="4%"><?echo $nombres?></td> 
		<td width="4%"><?echo $apellidos?></td> 
		<td width="4%"><?echo $dirección?></td> 
		<td width="4%"><?echo $telefono?></td> 
		<td width="4%"><?echo $email?></td> 
		 
	
	</tr>

*/<?php
     $k++;
     }
?>  
</table>
</body>
</html>
