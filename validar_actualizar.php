<?php
extract($_POST);
require("connect_db.php");

	$view = "UPDATE cliente SET nombre_cliente = '{$nombre}', Apodo = '{$apodo}', telefono = '{$telefono}', domicilio = '{$domicilio}', ipe = '{$ip}', instal = '{$dia}', id_localidad = '{$localidad}' WHERE id_cliente = '{$id}'";

	echo '<script> alert("'.$view.'") </script>';

	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$actualizar =mysqli_query($mysqli,$view);
	if ($actualizar ==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: principal.php");
		
		echo "<script>location.href='principal.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='alta_clientes.php'</script>";
}
?>