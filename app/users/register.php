<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

// In this file we register a new user.

//to upload an avatar-img to the avatar-folder (located in database)
if (isset($_FILES['avatar'])) {
    $avatar = $_FILES['avatar'];
    $destination =  __DIR__ . '/../database/avatars' . date("y-m-d") . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], $destination);
    $message = 'The file was successfully uploaded!';
}

//to insert username in database

if (isset($_POST['name'])) {
    $username = trim($_POST['name']);
    $email = $_POST['email'];
    $password = $_FILES['password'];
    $imgurl = $_POST['avatar'];

    $database = new PDO('sqlite:database.db');

    $database->exec("INSERT INTO users (username, email, password, image_url) VALUES ('$username', '$email', '$password','$imgurl')");
}

redirect('/');
