<!DOCTYPE html>
<html>
<head>
    <title>Tarea 1 - Librerias - Fabiola Mayorga</title>
</head>
    
<body>
	<h1>Tarea de librerias PHP</h1>
	<h2>Clase String</h2>
	<p>Funcion <strong>substr_replace()</strong></p>
	<?php
	$string = "Hola";
	echo "String original = ".$string."</br>";
	echo "String con substr_replace = ";
	echo substr_replace($string, "mas texto", 0 ,0);
	?>
	<p>Funcion <strong>substr_count()</strong></p>
	<?php
	$stringToCount = "Esto es una prueba y una muestra de como funciona substr_count";
	echo $stringToCount."<br>";
	echo "Cantidad de veces que el monosilibo 'un' es encontrado en el string = ";
	echo substr_count($stringToCount, 'un');
	?>
	<p>Funcion <strong>strstr() </strong></p>
	<?php
	$textToTrim = "Esto es una prueba del funcionamiento de la funcion strstr()<br>";
	echo $textToTrim;
	echo "Texto con strstr()  aplicado<br>";
	$trimmed = strstr($textToTrim, "prueba");
	echo $trimmed;
	?>
	<p>Funcion <strong>strpos()</strong></p>
	<?php
	echo "String a probar = ";
	$stringToPos = "Esto es una prueba<br>";
	echo $stringToPos;	
	echo "Primera aparicion de la palabra 'prueba' en el string anterior<br> ";
	echo strpos($stringToPos, "prueba");
	?>
	<h2>Clase Date and Time</h2>
	<p>Funcion <strong>DateTime::format() </strong></p>
	<?php
	$fecha = new DateTime('2015-02-01');
	echo $fecha->format('d-m-Y');	
	?>
	
	
</body>   
</html>