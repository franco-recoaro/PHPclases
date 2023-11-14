<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin ) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

// If anidados...
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];

echo "<br>";

if( !empty($cliente) ) { //SI EL ARREGLO NO ESTA VACIO YA QUE SE COLOCA "!" ANTES DEL EMPTY
    echo "El Arreglo de cliente no esta vacio";

    if($cliente['saldo'] > 0) {
        echo "El Cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}

echo "<br>";

// EELSE IF

if($cliente['saldo'] > 0 ) { //SI EL CLIENTE TIENE SALDO MUESTRA LO SIGUIENTE
    echo "El Cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') { //SI NO LLEGA A CUMPLIRSE, PREGUNTA SI ES PREMIUM
    echo "El Cliente es Premium";
} else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}

// SWITCH

echo "<br>";

$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo 'Emmm...';
        break;
    default:
        echo "Algún lenguaje que no se cual es";
        break;
}


include 'includes/footer.php';