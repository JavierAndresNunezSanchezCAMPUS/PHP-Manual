<!-- Funciones de salida -->

<!-- echo() Es la funcion mas comun para imprimir en PHP -->
<?php 
echo "Hola";
?>
<!-- printf() Es similar a echo pero solo puede imprimir una cadena de texto a la vez -->
<?php 
$texto = "Texto";
printf("Hola", $texto);
?>
<!-- sprintf() Es similar a printf() pero esta devuelve la cadena formateada como resultado -->
<?php
$texto = "Mundo";
$mensaje = sprintf("Hola", $texto);
echo $mensaje;
?>