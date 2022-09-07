<?php

$name = $_GET['name'];

echo exec("cmd /C start vlc \"C:\\xampp\\htdocs\\movies\\library\\movies\\".$name."\" MAX");

header('Location: /movies/');

?>