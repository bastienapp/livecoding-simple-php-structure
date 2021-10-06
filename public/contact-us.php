<?php

$objects = [
    "new_game" => "Ajouter un nouveau jeu",
    "bug" => "Déclarer un bug",
    "dollars" => "Envoyer des Vbucks",
    "php" => "Je kiffe le PHP",
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/contact-us.css">
</head>
<body>
    <form action="/form-backup.php" method="POST">
        <label for="contact_email">
            Email: 
            <input id="contact_email" type="email" required placeholder="your@email.com" name="form_email" />
        </label>
        <label for="contact_object">
            Object: 
            <select id="contact_object" name="form_object" required>
                <?php foreach ($objects as $value => $object) : ?>
                <option value="<?= $value; ?>"><?= $object; ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label for="contact_content">
            Content: 
            <textarea id="contact_content" name="form_content" required></textarea>
        </label>
        <input type="submit" value="Send" />
    </form>
</body>
</html>