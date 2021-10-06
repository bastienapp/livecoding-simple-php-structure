<?php

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    die("Try again!");
}

$email = $_POST['form_email'];
$object = $_POST['form_object'];
$content = $_POST['form_content'];

$errors = [];

if (empty($email)) {
    $errors[] = "Email is empty";
}
if (empty($object)) {
    $errors[] = "Object is empty";
}
if (empty($content)) {
    $errors[] = "Content is empty";
}

if (count($errors) > 0) {
    echo "<pre>";
    var_dump($errors);
    echo "</pre>";
} else {
    echo $email . '<br />';
    echo $object . '<br />';
    echo $content . '<br />';
}
