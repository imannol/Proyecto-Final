<?php 

	include 'plantilla.php';
	include 'db_connect.php';

	$query = "SELECT id_cliente, nombre_cliente, Apodo, telefono, domicilio, ipe, id_localidad FROM cliente";
	$resultado = $connect->query($query);

	$pdf = new PDF('L');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(15,6,'Clave',1,0,'C',1);
	$pdf->Cell(50,6,'Nombre',1,0,'C',1);
	$pdf->Cell(70,6,'Apodo',1,0,'C',1);
	$pdf->Cell(70,6,'Telefono',1,0,'C',1);
	$pdf->Cell(50,6,'Domicilio',1,0,'C',1);
	$pdf->Cell(25,6,'IP',1,0,'C',1);
	$pdf->Cell(50,6,'Localidad',1,0,'C',1);


	
	while($row = $resultado->fetch_assoc() ){

		$pdf->SetFont('Arial','',9);
		$pdf->Cell(15,6,$row['id_cliente'],1,0,'L');
		$pdf->Cell(70,6,utf8_decode($row['nombre_cliente']),1,0,'L');
		$pdf->Cell(70,6,utf8_decode($row['Apodo']),1,0,'L');
		$pdf->Cell(50,6,utf8_decode($row['telefono']),1,0,'L');
		$pdf->Cell(50,6,utf8_decode($row['domicilio']),1,0,'L');
		$pdf->Cell(50,6,utf8_decode($row['ipe']),1,0,'L');
		if ($row['id_localidad'] == 4) {
			# code...
			$pdf->Cell(25,6,'La Presa',1,0,'L');
		}else{
			$pdf->Cell(25,6,'ERROR',1,0,'L');
		}

		
	}

	$pdf->Output(utf8_decode('Listado de Clientes.pdf'), 'I');
	#$pdf->Output('D');
	#$pdf->Output('F','Catalogo de Clientes');
?>