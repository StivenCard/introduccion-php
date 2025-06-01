<body>
      <div class="card">
          <h1>🎬 <?= $title; ?></h1>
          <div class="type">Tipo: <?= $type; ?></div>
          <div class="id">ID: <?= $id; ?></div>
          <img src="<?= $poster_url; ?>" alt="Póster del próximo estreno">
          <p class="subtitle">⏳ <?= $until_message; ?> (Estreno: <?= $release_date; ?>)</p>
          <p><?= $overview; ?></p>
      </div>

        <div class="card">
            <h1>🎬 Próximo después: <?= $next['title']; ?></h1>
            <div class="type">Tipo: <?= $next['type']; ?></div>
            <div class="id">ID: <?= $next['id']; ?></div>
            <img src="<?= $next['poster_url']; ?>" alt="Póster del siguiente estreno">
            <p class="subtitle">⏳ <?= $until_message2; ?> (Estreno: <?= $next['release_date']; ?>)</p>
            <p><?= $next['overview']; ?></p>
        </div>
</body>