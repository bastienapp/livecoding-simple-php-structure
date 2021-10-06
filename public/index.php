<?php

// récupérer l'url qui m'a été envoyé
$urlPath = $_SERVER['REQUEST_URI'];

// en fonction de l'url, inclure le bon fichier php à afficher
switch ($urlPath) {
    case "/":
        require_once('../templates/home.php');
        break;
    case "/games":
        require_once('../templates/gamelist.php');
        break;
    case "/contact-us":
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            require_once('./form-backup.php');
        } else {
            require_once('./contact-us.php');
        }
        break;
    default:
        header("HTTP/1.1 404 Not Found");
}
