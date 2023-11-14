<?php include 'includes/header.php';

//SIMIL A LOS OBJETOS DE JAVASCRIPT
//ARRAY ASOCIATIVO - SE UTILIZAR CORCHETES EN VEZ DE LLAVES, LAS PROPIEDADES VAN CON COMILLAS

$cliente = [
    'nombre' => 'Juan', 
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium', 
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

//LLAMAR DIRECTAMENTE UNA PROPIEDAD
//ABRIMOS ETIQUETA DE APERTURA DE PRE Y COLOCAMOS DENTRO DE VAR DUMP EL NOMBRE DE LA VARIABLE Y ENTRE CORCHETES COLOCAMOS LA PROPIEDAD BUSCADA
echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

//COMO AÑADIR UNA NUEVA PROPIEDAD O MODIFICAR
//IGUAL QUE JS, SI NO EXISTE SE CREA  - SI EXISTE SE MODIFICA
$cliente['codigo'] = 1209192012;


include 'includes/footer.php';