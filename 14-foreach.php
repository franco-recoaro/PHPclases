<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo', 
        'precio' => 400,
        'disponible' => false
    ]
];

foreach( $productos as $producto) { ?> <!--CREO EL FOR EACH Y CIERRO EL CODIGO PHP PARA IMPRIMIR LOS DATOS EN HTML-->
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p> <!--CREO LOS ELEMENTOS HTML E INYECTO LOS DATOS DE LOS ARREGLOS --> 
        <p>Precio: <?php echo "$" . $producto['precio']; ?> </p> <!--PRECIO CONTIENE LOS VALORES DEL ARRAY $PRODUCTO Y EL VALOR DE LA PROPIEDAD PRECIO-->
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No Disponible';  ?> </p> <!-- EL "?" DEVUELVE DOS VALORES - SI EL VALOR DE LA PROPIEDAD DISPONIBLE ES VERDADERO, IMPRIME DISPONIBLE, SINO, IMPRIME NO DISPONIBLE-->
    </li>
    <?php
}



include 'includes/footer.php';