<?php 
declare(strict_types=1);
include 'includes/header.php';

// : ?string LE DIGO QUE LA FUNCION RETORNE UN STRING, PERO ES OPCIONAL "?" - PUEDE DEVOLVERLO COMO NO
//SI LA FUNCION IMPRIME PONDRÉ UN VOID
//TAMBIEN PUEDO COLOCAR: STRING|INT O RETORNA STRING O ENTERO

function usuarioAutenticado(bool $autenticado) : ?string {
    if($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';