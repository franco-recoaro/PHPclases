<?php include 'includes/header.php';

//EXISTEN DOS TIPOS DE ARRAYS: ARRAYS INDEXADOS Y ARRAY ASOCIATIVOS
//OBJETOS NO SIRVEN EN PHP , SE CONOCEN COMO ARRAY ASOCIATIVOS

$carrito = ['Tablet', 'Television', 'Computadora'];

// Util para ver los contenidos de un array
echo "<pre>"; //CON LA ETIQUETA DE APERTURA Y CIERRE DE "PRE", MUESTRA TODOS LOS DATOS DEL ARRAY
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

// Añadir un elemento nuevo al final...
array_push($carrito, 'Audifonos');

// Añadir al inicio
array_unshift($carrito, 'Smartwatch');



// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//TAMBIEN PUEDO CREAR UN ARRAY LLAMANDO A LA VARIABLE, IGUALANDO A array()
$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];


include 'includes/footer.php';