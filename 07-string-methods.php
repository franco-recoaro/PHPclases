<?php include 'includes/header.php';

$nombreCliente = "Juan Pablo";

// Conocer extension de un string
echo strlen($nombreCliente);
echo "<br>"; 
var_dump($nombreCliente);
echo "<br>"; 

// Eliminar espacios en blanco al inicio o al final de un string
$texto = trim($nombreCliente);
echo ($texto);
echo "<br>"; 

//Convertirlo a mayusculas
echo strtoupper($nombreCliente);
echo "<br>"; 

// Convertirlo en minusculas
echo strtolower($nombreCliente);
echo "<br>"; 

// Convertir la primera letra en mayuscula
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br>"; 

//Reemplazar palabras o caracteres
echo str_replace('Juan', 'J', $nombreCliente); //1RO LA PALABRA QUE QUIERO BUSCAR, 2DO LA PALABRA QUE QUIERO REEMPLAZAR Y 3RO LLAMO A LA VARIABLE A MODIFICAR.

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Pedro'); //DEVUELVE LA POSICION - EL INDICE
echo "<br>"; 


//OPERADOR PARA CONCATENAR STRINGS

$tipoCliente = "Premium";

echo "<br>";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente; //SE PUEDE CONCATENAR CON PUNTOS

echo "<br>"; 

echo "El Cliente ${nombreCliente} es ${tipoCliente} "; //SE PUEDE CONCATENAR COMO SI FUERA TEMPLATE STRING - SE UTILIZAN COMILLAS

include 'includes/footer.php';