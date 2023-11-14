<?php 
declare(strict_types=1); //LE INDICAMOS QUE PHP SEA MAS ESTRICTO
include 'includes/header.php'; //AGREGO EL HEADER A LA PAGINA


//LE INDOC LOS TIPO DE DATOS QUE ESPERA - EN ESTE CASO SON TIPO INT
//LOS INICIALIZO A 0 POR DEFECTO
function sumar(int $numero1 = 0, array $numero2 ) {
    echo $numero1 + $numero2;
}


sumar(10, 4);

//PARAMETROS NOMBRADOS
//PODEMOS DARLEE VALORES A LOS PARAMETROS EN EL ORDEN QUE QUERRAMOS
//PARA ELLO DEBEMOS LLAMAR AL PARAMETRO E IGUAL CON ":"
sumar(numero2: 2, numero1: 14);
include 'includes/footer.php';