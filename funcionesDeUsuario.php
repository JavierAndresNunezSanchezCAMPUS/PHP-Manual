<!-- Funciones definidas por el usuario -->
<!-- Son bloques de codigo que se pueden llamar y ejecutar en cualquier parte del programa para realizar una tarea especifica -->
<?php
sumar(); // Se puede ejecutar antes de su definicion

function sumar(){
    $numero1 = 50;
    $numero2 = 100; 
    $suma = $numero1 + $numero2;
    echo $suma;
}

sumar(); // Se puede ejecutar despues de su definicion
?>