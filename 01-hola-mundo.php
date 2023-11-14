<?php include 'includes/header.php'; ?>

<?php echo "hola Mundo"; ?> <!-- PARA INICIALIZAR DEBEMOS COLOCAR "< ? PHP" y cierro con ?>  -->

<br>

<?php echo("Hola Mundo"); ?> <!--PARA MOSTRAR POR PANTALLA ES echo("Hola Mundo");-->

<!--FORMAS DE IMPRIMIR EN PANTALLA-->

<?php 

print("Hola Mundo");
echo "<br>";
print "Hola Mundo";
echo "<br>";
print_r("Hola Mundo"); 
echo "<br>";
var_dump("Hola Mundo");
echo "<br>";


include 'includes/footer.php'; ?> <!-- SI NO CIERRO EL CODIGO PHP CON "?>" TODO LO QUE ESTA DENTRO DE ESAS DOS ETIQUETAS ES PHP -->

<!-- var_dump: muestra informacion mas completa de lo que estoy mostrando = ejemplo: string(10) "Hola Mundo" -->
