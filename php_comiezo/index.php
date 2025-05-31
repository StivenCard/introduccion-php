<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
// Inicializar una sesión cURL
$ch = curl_init(API_URL);
// Indicar que queremos recibir la respuesta de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Ejecutar la petición y guardar la respuesta
$response = curl_exec($ch);
// Una vez que hemos obtenido la respuesta, podemos procesarla como un array asociativo
$data = json_decode($response, true);
curl_close($ch);

//Una ATERNATIVA seria usar file_get_contents
// $response = file_get_contents(API_URL); // Solo si quieres hacer un GET de una API

/* var_dump($data); // Para ver la estructura de los datos obtenidos */

?>

<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <title>Próximos Estrenos del MCU</title>
      <style>
          body {
              font-family: 'Segoe UI', sans-serif;
              background-color: #121212;
              color: #f0f0f0;
              text-align: center;
              padding: 30px;
          }
          .card {
              background: #1e1e1e;
              border-radius: 12px;
              padding: 20px;
              margin: 20px auto;
              max-width: 400px;
              box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
          }
          .card img {
              width: 100%;
              border-radius: 10px;
          }
          h1 {
              color: #00e0ff;
          }
          .subtitle {
              font-size: 1.2em;
              color: #ffcc00;
          }
          .type {
              font-style: italic;
              color: #ccc;
          }
          .id {
              font-size: 0.9em;
              color: #888;
          }
      </style>
  </head>
  <body>

  <?php if ($data): ?>
      <div class="card">
          <h1>🎬 <?= $data['title']; ?></h1>
          <div class="type">Tipo: <?= $data['type']; ?></div>
          <div class="id">ID: <?= $data['id']; ?></div>
          <img src="<?= $data['poster_url']; ?>" alt="Póster del próximo estreno">
          <p class="subtitle">⏳ Faltan <?= $data['days_until']; ?> días (Estreno: <?= $data['release_date']; ?>)</p>
          <p><?= $data['overview']; ?></p>
      </div>

      <?php if (!empty($data['following_production'])): 
          $next = $data['following_production'];
      ?>
          <div class="card">
              <h1>🎬 Próximo después: <?= $next['title']; ?></h1>
              <div class="type">Tipo: <?= $next['type']; ?></div>
              <div class="id">ID: <?= $next['id']; ?></div>
              <img src="<?= $next['poster_url']; ?>" alt="Póster del siguiente estreno">
              <p class="subtitle">⏳ Faltan <?= $next['days_until']; ?> días (Estreno: <?= $next['release_date']; ?>)</p>
              <p><?= $next['overview']; ?></p>
          </div>
      <?php endif; ?>
  <?php else: ?>
      <p style="color: red;">❌ No se pudo obtener la información de la API.</p>
  <?php endif; ?>
  </body>
</html>