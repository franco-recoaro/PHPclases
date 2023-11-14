<?php include 'includes/header.php';


$numero1 = 30;
echo ++$numero1; //SI COLOCO ++ ANTES DE LA VARIABLE, MUESTRA LA MISMA PERO YA SUMA 1
echo "<br>"; 
echo $numero1++; //SI COLOCO ++ DESPUES DE LA VARIABLE, MUESTRA LA MISMA SIN SUMAR UNO
echo "<br>";     

$numero1 += 5;
echo $numero1; //SI COLOCO += DESPUES DE LA VARIABLE, MUESTRA LA MISMA CON EL VALOR SUMADO
echo "<br>";

$numero2 = 30;
echo --$numero2;
echo "<br>";



include 'includes/footer.php';