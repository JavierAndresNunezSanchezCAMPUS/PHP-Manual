<!-- Arreglos en PHP -->
<!-- Son estructuras de datos que permiten almacenar multiples valores en una sola variable. Un arreglo puede contener cualquier tipo de valor -->

<?php 
$array = array("valor", "valor", "valor");
$habitacion = ['Cama', 'Closet', 'Computadora', 'Mesita'];
var_dump($habitacion); // Imprime todo el array con sus posiciones descriptivas
echo "<br>"; echo "<br>";
echo $habitacion[2]; // Impresion de dato especifico
echo "<br>"; echo "<br>";
array_push($habitacion, "Lampara"); // Agrega un nuevo dato al final del array
var_dump($habitacion);
echo "<br>"; echo "<br>";
array_unshift($habitacion, "Cortinas"); // Agrega un nuevo dato al inicio del array
var_dump($habitacion);
echo "<br>"; echo "<br>";
?>

<!-- Arrays asociativos -->
<!-- Son un tipo de estructura de datos que permiten asociar claves con valores -->
<?php 
$arrayAssoc = array(
    "Nombre" => "Javier",
    "Apellido" => "Nuñez",
    "Edad" => 17 
);
echo $arrayAssoc["Nombre"]; // Imprimirá el valor que contiene "Nombre"
echo "<br>"; echo "<br>";
foreach ($arrayAssoc as $key => $value){
    echo "La key es: ".$key." y su value es: ".$value."<br>"; // Se referencia la key y el valor, concatenando con puntos
}

var_dump(in_array('Cama', $habitacion));
echo "<br>"; echo "<br>";
?>

<!-- isset() y empty() -->
<!-- Son funciones que son usadas para verificar si una variable o un elemento de un array tiene un valor definido o no -->
<?php 
$issetMsg;
if(isset($issetMsg)){
    echo "La variable está definida";
} else {
    echo "La variable no está definida";
}
echo "<br>"; echo "<br>";
$emptyMsg = "Valor";
if(empty($emptyMsg)){
    echo "La variable no está definida";
} else {
    echo "La variable está definida";
}
echo "<br>"; echo "<br>";
?>

<!-- Ordenar arreglos -->
<!-- Arreglos normales -->
<?php 
$numeros = array(1,2,5,3,6,3,1);
sort($numeros); // Menor a mayor
var_dump($numeros);
echo "<br>"; echo "<br>";
rsort($numeros); // Mayor a menor
var_dump($numeros);
echo "<br>"; echo "<br>";
?>
<!-- Arreglos asociativos -->
<?php 
$tienda = array(
    'Papas' => 100,
    'Yogurt' => 50,
    'Café' => 150,
    'Jugo' => 360,
    'Pastel' => 500,
);
asort($tienda); // Ordena por valores (alfabeticamente)
var_dump($tienda);
echo "<br>"; echo "<br>";
arsort($tienda); // Ordena por valores (alfabeticamente Z-A)
var_dump($tienda);
echo "<br>"; echo "<br>";
ksort($tienda); // Ordena por llaves (alfabeticamente)
var_dump($tienda);
echo "<br>"; echo "<br>";
krsort($tienda); // Ordena por llaves (alfabeticamente Z-A)
var_dump($tienda);
echo "<br>"; echo "<br>";
?>