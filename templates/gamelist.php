<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming 2000 - Game list</title>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/game-card.css">
</head>
<body>
    <?php require_once('../templates/_nav.php'); ?>
    <?php
    $games = [
        [
            "title" => "Portal 2",
            "img" => "https://s2.gaming-cdn.com/images/products/220/orig/game-steam-portal-2-cover.jpg",
            "description" => "The cake is still a lie",
        ],
        [
            "title" => "Portal",
            "img" => "https://m.media-amazon.com/images/I/81xtGv3x0ML._AC_SL1500_.jpg",
            "description" => "The cake is a lie",
        ],
        [
            "title" => "The Last of Us",
            "img" => "https://m.media-amazon.com/images/I/81OFTUvFX4L._AC_SL1500_.jpg",
            "description" => "Mushroom zombies",
        ],
    ];
    ?>

    <main>
        <ul>
            <?php foreach ($games as $game) : ?>
            <li>
                <?php require('../templates/_game-card.php'); ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </main>

    <?php require_once('../templates/_footer.php'); ?>
</body>
</html>