<!DOCTYPE html>
<html>
<head>
    <title>Tarea 1 - Librerias - Fabiola Mayorga</title>
</head>
    
<body>
	<h1>Tarea de librerias PHP</h1>
	<h2>Clase String</h2>
	<p>Funcion <strong>substr_replace</strong></p>
	<?php
	$string = "Hola";
	echo "String original = ".$string."</br>";
	echo "String con substr_replace = ";
	echo substr_replace($string, "mas texto", 0 ,0);
	?>
	<p>Funcion <strong>substr_count</strong></p>
	<?php
	$stringToCount = "Esto es una prueba y una muestra de como funciona substr_count";
	echo $stringToCount."<br>";
	echo "Cantidad de veces que el monosilibo 'un' es encontrado en el string = ";
	echo substr_count($stringToCount, 'un');
	?>
	
</body>   
</html>