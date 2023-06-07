<!-- json_encode y json_decode -->
<!-- Se usan para convertir estructuras de datos PHP y JSON -->

<!-- json_encode() Convierte una estructura de datos de PHP en JSON -->
<?php 
$productos = [
    [
        'Name' => 'Hit',
        'Color' => 'Orange',
        'Price' => 3500,
        "<br><br>"
    ],
    [
        'Name' => 'Oreos',
        'Color' => 'Black',
        'Price' => 1800,
        "<br><br>"
    ],
    [
        'Name' => 'Margaritas',
        'Color' => 'Yellow',
        'Price' => 3800,
        "<br><br>"
    ]
];
var_dump($productos);
$json = json_encode($productos); // JSON conversion
echo "<br><br><br><br>";
var_dump($json);
echo "<br><br><br><br>";
?>
<!-- json_decode() Convierte una estructura de datos de JSON a PHP -->
<?php 
$json = '{
    "Name" : "Javier",
    "Age" : 20,
    "Married" : false
}';

$data = json_decode($json);
var_dump($data);
?>