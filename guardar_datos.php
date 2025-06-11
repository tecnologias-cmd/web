<?php

$conexion = new mysqli("20.59.121.124", "root", "1234", "prueba");

if ($SERVER["REQUEST_METHOD"] == "POST")
{
	$nombre = $POST['nombre'];
	$apellido = $POST['apellido'];
	$email = $POST['email'];
	$edad = $POST['edad'];

	$sql "INSERT INTO alumnos (nombre, apellido, email, edad)
	VALUES ('$nombre', '$apellido', '$email', '$edad')";

	if ($conexion->query($sql) === TRUE)
	{
	echo "Datos guardados correctamente.";

	}else {
	echo "Error: " . $sql . "<br>" . $conexion->error;
	
	}
	$conexion->close();
}
	?>


