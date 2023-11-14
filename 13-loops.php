<?php include 'includes/header.php';
                              
// WHILE

$i = 0; // Inicializador

while($i < 10) { //MIENTRAS QUE INDICE SEA MENOR QUE 10

    echo $i . "<br>"; //IMPRIME LA VARIABLE "I"

    $i++; //INCREMENTA LA VARIABLE "I"
}

echo "<br>";



// DO WHILE

$i = 100;

do {
    echo $i . "<br>"; //IMPRIME LA VARIABLE "I"
    $i++; //INCREMENTA LA VARIABLE "I" 
} while($i < 10); //MIENTRAS QUE INDICE SEA MENOR QUE 10 - EL BUCLE SEGUIRA RECORRIENDO



// For Loop.
 for($i = 1; $i < 1000; $i++ ){
     echo $i . '<br/>';
 }


// FOR EACH - PARA RECORRER ARRAYS
$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente ): //RECORRE EL ARRAY CLIENTES Y LO ALMACENA EN UN NUEVO ARRAY LLAMADO CLIENTE
    echo $cliente . '<br/>'; //A CADA ELEMENTO RECORRIDO, SE LE CONCATENA CON "." UN SALTO DE LINEA <br/>
endforeach;

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

include 'includes/footer.php';