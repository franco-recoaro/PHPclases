<?php include 'includes/header.php';

//REQUIERE HACE ELA MISMA FUNCION QUE INCLUDE, ES DECIR, LLAMAR A OTRO ARCHIVO
//INCLUDES ENFOCADO EN LLAMAR A TEMPLATES/PLANTILLAS
//REQUIRE ENFOCADO EN LLAMAR A FUNCIONES
//REQUIRE_ONCE LLAMA UN UNICO ARCHIVO

//REQUIRE E INCLUDES SE UTILIZAN PARA LLAMAR ARCHIVOS EXTERNOS

require 'funciones.php';

iniciarApp();



include 'includes/footer.php';