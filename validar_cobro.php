<?php
extract($_POST);
require("connect_db.php");

	$execute = "UPDATE cobranza SET fecha_cobro = '{$date}', fichas = '{$fichas}', precio = '{$precio}' WHERE id_cobranza = '{$id}'";

	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

	echo '<script>alert("'.$execute.'")</script>';
	
	$actualizar =mysqli_query($mysqli,$execute);
	if ($actualizar ==null)
	 {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: instal.php");
	
		echo "<script>location.href='principal.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='instal.php'</script>";
}
?>