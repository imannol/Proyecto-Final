<?php
extract($_POST);
require("connect_db.php");

	$execute = "UPDATE fichaje SET fecha_entregar = '{$fecha}', fecha_recoger = '{$fechaa}', estado_servicio = '{$hoi}', observaciones = '{$obs}' WHERE id = '{$id}'";

	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	
	$actualizar =mysqli_query($mysqli,$execute);
	if ($actualizar ==null)
	 {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: principal.php");
		
		echo "<script>location.href='principal.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='alta_fichas.php'</script>";
}
?>