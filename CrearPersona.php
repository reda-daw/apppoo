<?php
require_once 'Persona.php';

// crear una persona
$per = new Persona("1111111A", "Ana", "Puertas");

// mostrarla, usa el método __toString()
echo $per . "<br>";

// cambiar el apellido
$per->setApellido("Montes");

// volver a mostrar
echo $per . "<br>";
?>