<?php
declare(strict_types=1); // Declaración estricta para asegurar tipos de datos

class SuperHeroe {
    /* //Propiedades y metodos
    public $nombre;
    public $poderes;
    public $planeta; */

    // Promoted properties (PHP 8.0+)
    public function __construct(
      /* public readonly string $nombre,  */
      private string $nombre,
      public  array $poderes,
      public string $planeta) 
    {
       /*  $this->nombre = $nombre;
        $this->poderes[] = $poderes;
        $this->planeta = $planeta; */
    }

    // Metodos estaticos son aquellos que no necesitan una instancia de la clase para ser llamados.
    public static function crearSuperHeroeRandom(){
      $nombres = ["Superman", "Batman", "Wonder", "Flash", "Aquaman"];
      $poderes = [
       ["volar", "fuerza", "velocidad", "invisibilidad", "telepatía"], 
       ["agilidad", "inteligencia", "habilidad de combate"], 
       ["velocidad", "invisibilidad", "telepatía"], 
       ["velocidad", "agilidad", "fuerza"], 
       ["velocidad", "telepatía"]
      ];
      $planetas = ["Krypton", "Gotham", "Themyscira", "Central City", "Atlantis"];
      $nombre = $nombres[array_rand($nombres)]; //Devuelve la llave aleatoria de un array
      $poder = $poderes[array_rand($poderes)];
      $planeta = $planetas[array_rand($planetas)];

      return new self($nombre, $poder, $planeta); // Devuelve una nueva instancia de la clase SuperHeroe

    }
    

    public function atcar(){
      $poderes = implode(", ", $this->poderes); // Convierte el array de poderes en una cadena de text separada por comas
      return "El superhéroe $this->nombre ataca con el poder $poderes desde el planeta $this->planeta.";
    }

    public function descripcion(){
      return "El superheroe $this->nombre que viene del planeta $this->planeta tiene los siguientes poderes: $this->poderes)";
    }
    

}

$superheroe1 = new SuperHeroe("Superman", ["volar", "fuerza", "vision de rayos X"], "Krypton");
echo $superheroe1->atcar() . "\n";

$hero = SuperHeroe::crearSuperHeroeRandom();
echo $hero->atcar() . "\n";


?>