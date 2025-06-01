<?php 

declare(strict_types=1); // Declaración estricta para asegurar tipos de datos

class NextMovie {
  public function __construct(
    private int $days_until,
    private array $following_production,
    private int $id,
    private string $overview,
    private string $poster_url,
    private string $title,
    private string $release_date,
    private string $type,
  ) {}

  public function get_until_message(): string {
    $days = $this->days_until;
    return match(true){
        $days === 0 => 'Hoy se estrena',
        $days === 1 => 'Mañana es el estreno',
        $days <= 7  => 'Se estrena esta semana',
        $days <= 30 => 'Se estrena este mes',
        default     => "En $days días es el estreno",
    };
  }

  public static function fetch_and_create_movie (string $api_url): NextMovie{
    //Una ATERNATIVA seria usar file_get_contents
    $response = file_get_contents($api_url); // Solo si quieres hacer un GET de una API
    $data = json_decode($response, true);
    return new self(
      $data['days_until'],
      $data['following_production'],
      $data['id'],
      $data['overview'],
      $data['poster_url'],
      $data['title'],
      $data['release_date'],
      $data['type'],
    );
  }

  public function get_data(){
    return get_object_vars($this);
  }

}


?>