<?php
require_once("connect_db.php");
$sql="SELECT fecha_entregar,fecha_recoger from fichaje ORDER BY fecha_entregar";
$result=mysqli_query($mysqli,$sql);

$valoresY=array();//fecha_entregar
$valoresX=array();//fecha_recoger

while($ver=mysqli_fetch_row($result))
{
	$valoresY[]=$ver[0];
	$valoresX[]=$ver[1];
}

$datosX = json_encode($valoresX);
$datosY = json_encode($valoresY);
?>

<div id="graficaLineal"></div>

	<script type="text/javascript">
		function crearCadenaLineal(json) 
		{
			var parsed = JSON.parse(json);
			var arr = [];
			for (var x in parsed) {
				arr.push(parsed[x]);
			}return arr;
		}
	</script>
	<script type="text/javascript">


datosX=crearCadenaLineal('<?php echo $datosX?>');
		datosY=crearCadenaLineal('<?php echo $datosY?>');
		
		var trace1 = {
  x: datosX,
  y: datosY,
  type: 'scatter'
};

var data = [trace1];

Plotly.newPlot('graficaLineal', data);
	</script>
