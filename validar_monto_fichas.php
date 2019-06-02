<?php
extract($_POST);
require("connect_db.php");

$examinar = "UPDATE dinero SET fichas = '{$fichas}', precio = '{$precio}', id_localidad = '{$localidad}' where id_monto = '{$id}' ";

echo '<script>alert("'.$examinar.'")</script>';

	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

$actualizar =mysqli_query($mysqli,$examinar);



if ($actualizar ==null)
{
	echo "Error de procesamieno no se han actuaizado los datos";
	echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
	header("location: alta_monto_fichas.php");
	
	echo "<script>location.href='alta_monto_fichas.php'</script>";
}else {
	echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
	
	echo "<script>location.href='alta_monto_fichas.php'</script>";
}
?>