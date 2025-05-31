<?php
  $name = 'Stiven Cardona';
  $is_tive = true;
  $age = 10;
  $is_old = $age > 50;

  // Var dump sirve para ver el tipo de dato y su valor los muestra en pantalla
  // var_dump($name, $is_tive, $age); 
  /* echo is_string($name);
  echo is_bool($is_tive);
  echo is_int($age); */ 
  $output = "Mi nombre es $name y mi edad es $age y soy yo? $is_tive";

  // constantes globales deberian tener su propio archivo
  define('ESTO_ES_UNA_CONSTANTE_GLOBAL', 'Hola, soy una constante global');
  //Las contantes locales
  const ESTO_ES_UNA_CONSTANTE = ' Hola, soy una constante';

  /*   if($is_old){
    echo "<h2>Soy viejo</h2>";
  }elseif($is_old){
    echo "<h2>Soy joven</h2>";
  } else {
    echo "<h2>Soy un niño</h2>";
  }
 */

 // Otra forma de hacer condicionales 
  /*  <?php if ($is_old) : ?>
    <h2>Soy viejo</h2>
  <?php elseif ($is_tive) : ?>
    <h2>Soy joven</h2>
  <?php else : ?>
    <h2>Soy un niño</h2>
  <?php endif; ?> */

 //ternaria
 $outputAge = $is_old 
  ? ' Soy viejo' 
  : ' Eres joven';
  
  // Compara con cada uno de los valores o casos que estan dentro del match
  /*  $outputAge2 = match ($age) {
    24 => ' Eres joven',
    50 => ' Eres adulto',
    default => ' Eres viejo',
  } */

  // Otra forma del match
  $outputAge = match (true) {
    $age < 2 => ' Eres un bebé',
    $age < 12 => ' Eres un niño',
    $age < 20 => ' Eres un adolescente',
    $age === 18 => ' Eres mayor de edad',
    $age < 30 => ' Eres joven',
    $age < 50 => ' Eres adulto',
    default => ' Hueles mas a madera que a fruta',
  };

  $best_lenguajes = [
    'PHP',
    'JavaScript',
    'Python',
    'Java',
    'C#',
  ];
  // agregar un elemento al array
  $best_lenguajes[] = 'C++';
  $best_lenguajes[] = 'typescript';
  // Otra forma de agregar un elemento al array
  array_push($best_lenguajes, 'Go', 'Ruby');

  // diccionario o array asociativo
  $person = [
    'name' => 'Stiven Cardona',
    'age' => 10,
    'is_tive' => true,
    'lenguajes' => [
      'PHP',
      'JavaScript',
      'Python',
    ] 
  ];

?>


<ul>
  <? foreach ($best_lenguajes as $indice => $lenguaje) : ?>
    <li><?="El elemento ". $indice + 1 . " es: " . $lenguaje ?></li>
  <? endforeach; ?>
</ul>

<h3>
  El mejor lenguaje es: 
  <?php
    echo $best_lenguajes[7];
  ?>
</h3>

<h1>
  <?= $output, ESTO_ES_UNA_CONSTANTE , $outputAge ?>
</h1>











<style>
  body {
    background-color:rgb(68, 68, 68);
    color: #333;
    font-family: Arial, sans-serif;
    text-align: center;
    margin-top: 50px;
    display: grid;
    place-items: center;
  }
  h1 {
    color:rgb(202, 73, 95);
  }

  h2 {
    color: rgb(255, 255, 255);
  }

  h3 {
    padding: 0;
    color: rgb(233, 125, 25);
  }

  ul {
    list-style-type: none;
    padding: 0;
    color: bisque;
  }
</style>