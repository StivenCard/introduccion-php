<?php

function get_data (string $url): array{
    //Una ATERNATIVA seria usar file_get_contents
    $response = file_get_contents($url); // Solo si quieres hacer un GET de una API
    $data = json_decode($response, true);
    return $data;
}

function get_until_message(int $days): string {
    return match(true){
        $days === 0 => 'Hoy se estrena',
        $days === 1 => 'Mañana es el estreno',
        $days <= 7  => 'Se estrena esta semana',
        $days <= 30 => 'Se estrena este mes',
        default     => "En $days días es el estreno",
    };
}

function render_template(string $template, array $data = []): void {
    $next = $data['following_production'] ?? null;
    extract($data); // extrae los elementos del array $data como variables
    require "templates/$template.php"; // Incluye el archivo de plantilla
}

?>