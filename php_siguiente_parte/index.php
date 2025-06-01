<?php
require_once 'consts.php'; // Esta pegando el código de consts.php una vez
// require 'functions.php';// Esta pegando el código de functions.php
require_once 'functions.php'; // Esta pegando el código de functions.php una vez 
/* include_once 'functions.php'; // Si no encuentra el archivo na da error, da una advertencia */
require_once 'clases/next_movie.php'; // Esta pegando el código de next_movie.php una vez

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

?>

<!DOCTYPE html>
<html lang="es">
    <?php render_template('head', ["title" => $next_movie_data["title"]]); ?>
    <?php render_template('body', array_merge(
        $next_movie_data,
        ["until_message" => $next_movie->get_until_message(),
        "until_message2" => $next_movie->get_until_message($next_movie_data['following_production']['days_until'] ?? 0),
        ]
    )); ?>
</html>