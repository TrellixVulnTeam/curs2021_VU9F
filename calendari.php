<?php
$mes = date("F");
echo "<h2>$mes</h2>";
?>

<table border = "1">
	<tr>
		<td>Lun</td>
		<td>Mar</td>
		<td>Mie</td>
		<td>Jue</td>
		<td>Vie</td>
		<td>Sab</td>
		<td>Dom</td>
	</tr>
<?php

$dia = date("j");
$dia_setm = date("N");
$dias_mes = date("t");

for ($d = $dia; $d > 0; $d--){
	if($dia_setm == 1){
		$dia_setm = 7;
	} else if ($dia_setm > 1){
		$dia_setm--;
	}
}

$dia = 1 - $dia_setm;


	for ($fila = 0; $fila < 6; $fila++) {
		echo"<tr>";

		for ($columna = 0; $columna < 7; $columna++) {
			if($dia == date("j")){
				?>
				<td style = "background-color:yellow">
				<?php
			} else {
				echo"<td>";
			}
			if($dia > 0 && $dia <= $dias_mes)  echo"$dia";
			if($dia > $dias_mes) echo"<br>";
			echo"</td>";
			$dia++;
		}

		echo"</tr>";
	}

?>

</table>
