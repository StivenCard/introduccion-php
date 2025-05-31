<?php

echo "Hola, Php \n";

/*Sintaxis Comentario en bloque*/
// Comentario de una línea

// Variables
$my_string = 'Esto es una cadena de texto';
$my_string = 'Esto es una cadena de texto modificada';
echo $my_string . "\n";

echo gettype($my_string) . "\n"; // Imprime el tipo de dato de la variable

// Numericos
$my_string = 1234; 
echo $my_string . "\n";
echo gettype($my_string) . "\n"; // Imprime el tipo de dato de la variable
$my_string = "Esto es una cadena de texto";
//PHP ES DE TIPADO DINAMICO O DEBIL

$my_int = 1234;
$my_int = $my_int + 10; // Suma
echo $my_int . "\n"; // Imprime el valor de la variable
echo $my_int - 1 . "\n"; // Imprime el valor de la variable
echo $my_int;
echo gettype($my_int) . "\n"; // Imprime el tipo de dato de la variable

// Flotantes Es Double
$my_double = 1234.56;
echo gettype($my_double) . "\n"; // Imprime el tipo de dato de la variable
echo $my_int + $my_double . "\n"; // Suma de entero y flotante
/* echo $my_int + $my_double + $my_string . "\n"; // Suma de entero, flotante y cadena */


// Booleanos
$my_bool = true; // Verdadero
echo $my_bool . "\n"; // Imprime 1 para verdadero
$my_bool2 = false; // Falso
echo $my_bool2 . "\n"; // Imprime nada para falso
echo gettype($my_bool) . "\n"; // Imprime el tipo de dato de la variable

// Interpolación de cadenas
echo "El valor de mi intiger es: $my_int y el de mi boolean es: $my_bool \n"; 

// Constantes se definen normal como otros lenguajes y se muestra solo poniedo su nombre sin usar el signo de dólar
const MY_CONSTANT = "Esto es una constante";
echo MY_CONSTANT . "\n";

// Estrucutras de datos
//Arrays
$my_array = [$my_string, $my_int, $my_double, $my_bool];
echo gettype($my_array) . "\n"; // Imprime el tipo de dato de la variable
echo $my_array[0] . "\n"; // Se accede a las listas o arreglo con [ índice ] 
echo $my_array[3] . "\n";
//Agregar un elemento al array
array_push($my_array, "Nuevo elemento");
echo $my_array . "\n";  // Esto no funcionará, ya que no se puede imprimir un array directamente
print_r($my_array); // Imprime el array de forma legible

// Diccionarios o Mapas
$my_dict1 = array(
    "nombre" => "Stiven",
    "edad" => 24,
    "activo" => true
);
echo gettype($my_dict1) . "\n"; // Imprime el tipo de dato de la variable
print_r($my_dict1); // Imprime el diccionario de forma legible

// otra forma de crear un diccionario
$my_dict2 = [
    "nombre" => "Juan",
    "edad" => 30,
    "activo" => false
];
echo gettype($my_dict2) . "\n"; // Imprime el tipo de dato de la variable
print_r($my_dict2); // Imprime el diccionario de forma legible
// Acceder a los valores del diccionario
echo $my_dict1["nombre"] . "\n"; // Imprime el valor de la clave "nombre"
echo $my_dict2["edad"] . "\n"; // Imprime el valor de la clave "edad"

// Set
array_push($my_array, 'Brasil');
array_push($my_array, 'Brasil'); // Agrega un elemento duplicado
print_r($my_array); // Imprime el array con duplicados
print_r(array_unique($my_array)). "\n"; // Elimina duplicados

// Flujos de datos 
// Este for funciona mas como para pocisiones 
for ($index = 0; $index <= 10; $index++) {
    echo "El valor de i es: $index \n";
}

// Foreach nos da los elementos del array o diccionario
foreach ($my_array as $my_item){
    echo "El valor del item es: $my_item \n";
}

// While
$i = 0;
while ($i <= sizeof($my_array) - 1) {
    echo "El valor del elemento desde el while: $my_array[$i]  \n"; // Imprime el valor del array en la posición $i
    $i++;
}

// Condicionales 
echo $my_string . "\n";
echo $my_int . "\n"; 
if ($my_int > 1000 && $my_string == 'Esto es una cadena de texto modificada') {
    echo "El valor de my_int es mayor a 1000 \n";
} elseif ($my_int < 1000 || $my_string != 'Esto es una cadena de texto modificada') {
    echo "El valor de my_int es menor a 1000 \n";
} else {
    echo "El valor de my_int es igual a 1000 \n";
}

// Funciones
function my_function($param1, $param2) {
    return $param1 + $param2; // Retorna la suma de los dos parámetros
}

$resultado = my_function(10, 20); // Llama a la función con los parámetros 10 y 20
echo "El resultado de la suma es: $resultado \n"; // Imprime el resultado de la función
$resultado = my_function(12, 10);
echo "El resultado de la suma es: $resultado \n"; 
$resultado = my_function(5, 4);
echo "El resultado de la suma es: $resultado \n"; 

// Clases y Objetos

class MyClass {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name; 
    $this->age = $age; 
  }

}
$my_object = new MyClass("Stiven", 24); // Crea un nuevo objeto de la clase MyClass
print_r($my_object);
// Accede a las propiedades del objeto con la sintaxis de flecha (->) y la propiedad no lleva el signo de dólar
echo "El nombre del objeto es: " . $my_object->name . "\n"; 
echo "La edad del objeto es: " . $my_object->age . "\n"; 
// Modifica las propiedades del objeto
$my_object->name = "Juan"; 
$my_object->age = 30; 
echo "El nombre del objeto modificado es: " . $my_object->name . "\n";
echo "La edad del objeto modificada es: " . $my_object->age . "\n";
echo gettype($my_object) . "\n"; // Una clase es de tipo objeto
