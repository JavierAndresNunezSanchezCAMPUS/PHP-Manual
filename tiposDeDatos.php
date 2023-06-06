<!-- Variables y constantes -->
<!-- Se definiran siempre con el simbolo $ seguido del nombre asignado para la variable y seguido el simbolo = -->
<?php 
$instrumento = "Guitarra";
$numero = 1;
$cuerdas = true;
?>

<!-- Tipos de datos -->

<!-- Enteros (int)  se usan para almacenar numeros enteros sin decimales -->
<?php 
$entero = 50;
?>
<!-- Decimales (float) se usan para almacenar numeros con decimales -->
<?php 
$decimal = 2.5;
?>
<!-- Cadenas de texto (string) se usan para almacenar texto y caracteres -->
<?php 
$string = "¡Hola! PHP";
?>
<!-- Booleanos (bool) se usan para almacenar valores verdaderos o falsos (true o false) -->
<?php 
$verdadero = true;
$falso = false;
?>
<!-- Arreglos (array) se usan para almacenar una coleccion de datos -->
<?php 
$array = array("Hola", 32, 5.5, false);
?>
<!-- Objetos (object) se usan para almacenar instancias de clases que son definiciones de objetos -->
<?php 
class Persona {
    public $nombre; // Propiedad de la clase
    public $edad; // Propiedad de la clase

    // Método de la clase
    public function saludar() {
      echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
  }
// Crear un objeto de la clase Persona
$persona1 = new Persona(); // OBJETO DEFINIDO
// Asignar valores a las propiedades del objeto
$persona1->nombre = "Juan";
$persona1->edad = 25;
// Llamar al método del objeto
$persona1->saludar();
?>
<!-- Recursos (resource) se utilizan para almacenar referencias a recursos externos como conexiones a bases de datos o archivos abiertos -->
<?php 
$archivo = fopen("archivo.txt", "r");
?>
<!-- Nulos (null) se utilizan para representar una variable sin valor o sin definir  -->
<?php 
$mensaje;
var_dump($mensaje); // Impresion de tipo de dato nulo (null)
$mensaje2 = "Hola";
echo $mensaje2;
?>