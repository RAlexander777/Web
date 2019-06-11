<!DOCTYPE html>

<html>
    
<head></head>

<body>   
<?php

$numero_objetos= $_POST['cantidad'];
$capacidad = $_POST['capacidad'];

for($i=0; $i<$numero_objetos; $i++)
{
	$array_peso = $_POST['peso[i]'];
	$array_ganancia = $_POST['valor[i]'];
}

function evaluar ($capacidad, $array_peso, $array_ganancia, $numero_objetos)
{
	echo"<div id='evaluar'><p><h3> CAPACIDAD: ".$capacidad." unidades</h3></p> <table>
	<th>PESO </th><th>GANANCIA</th><th>GENERACION INICIAL</th>";

	for ($i=1; $i <= $numero_objetos; $i++)
	{
		if ($array_peso[$i] > $capacidad)
		{
			$array_ganancia[$i] = 0;
		}

		$array_poblacion[$i] = sprintf('%1$0'.$numero_objetos.'b',$i);
		echo "<tr><td>".$array_peso[$i]."</td> <td>".$array_ganancia[$i]."</td><td>".$array_poblacion[$i]."</td></tr>";
		@$suma = $suma + $array_ganancia[$i];
	}

	echo"</table></div>";
	$porcentaje = 100/$suma;

	for ($i=1; $i <= $numero_objetos; $i++) 
	{
		$array_porcentaje[$i] = $porcentaje * $array_ganancia[$i];
	}

	for($j=1; $j<=2; $j++)
	{
		$random = rand(0, 100);
		echo"<script> alert('Ruleta:".$random."');</script>";
		$suma2 = 0;

		for ($i=1; $i <= $numero_objetos; $i++) 
		{
			if ($array_ganancia[$i] == 0) 
			{
			 	
			}

			else
			{
			 	$suma2 = $suma2 + $array_porcentaje[$i];
			 	
				if ($random <= $suma2) 
				{
					$array_elegido[$j] = $array_poblacion[$i];
					break;
				}
				else
				{

				}
			}
		}
		
	}

?>
	
<div id='resultados'>
<div id="elegidos">
<h3> Elegidos</h3>

<?php
	for($j=1; $j<=2; $j++)
	{
		echo"<p>".$array_elegido[$j]."</p>";
	}

	$genes = preg_split('//', $array_elegido[1], -1, PREG_SPLIT_NO_EMPTY);
	$genes2 = preg_split('//', $array_elegido[2], -1, PREG_SPLIT_NO_EMPTY);

	$aux = $genes[2];
	$genes[2] = $genes2[2];
	$genes2 = $aux;

	echo"<p>Optimo:</p>";
	foreach ($genes as $key) 
	{
		echo"".$key."";
	}

	echo"</div></div>";
}

?>
    
</body> 
    
</html>