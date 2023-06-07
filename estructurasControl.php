<!-- Estructuras de control -->
<!-- Son herramientas usadas para controlar el flujo de ejecucion de un programa -->
<!-- Las mas comunes son: 
- Condicionales: If y Switch
- Repeticion: For, While y Do while
- Excepcionales: Try catch -->
<?php 
if (10>3){
    echo "Verdadero"; // Esto se ejecuta ya que la condicion es verdadera
} else {
    echo "Falso"; // Esto no se ejecuta ya que la condicion NO es falsa
}
echo "<br>"; echo "<br>";
$numero = 3;
switch ($numero){
    case 0: echo "Caso 0"; break;
    case 1: echo "Caso 1"; break;
    case 2: echo "Caso 2"; break;
    case 3: echo "Caso 3"; break; // Se ejectu esta condicion por la expresion en el switch y no continua el código debido al break, en caso de no tener este ultimo, apartir del caso validado correrá el código
    case 4: echo "Caso 4"; break;
}
echo "<br>"; echo "<br>";

while (10</* > */5) {
    echo "Infinito"; // En caso de poner la condicion verdadera se ejecutará siempre, por lo tanto creariamos un bucle infinito
};
echo "<br>"; echo "<br>";
do {
    echo "Ejecucion una vez"; // A pesar de no cumplir la condicion, debido al do, se ejecutará al menos una vez obligatoriamente
} while (10</* > */5);
echo "<br>"; echo "<br>";
// (#Inicializacion ; #condicion ; incremento/decremento)
for ($i=0;$i<4;$i++){
    echo "Esta es la vuelta {$i} mientras se cumpla la condicion <br>";
}; // Si la condicion deja de cumplirse, el ciclo parará
?>