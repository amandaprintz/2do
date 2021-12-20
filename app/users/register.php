<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

// In this file we register a new user.

//to upload an avatar-img to the avatar-folder (located in database)


//to insert username in database

if (isset($_POST['name'])) {
    $username = trim($_POST['name']);
    $email = $_POST['email'];
    $password = $_POST['password'];

    $database->exec("INSERT INTO users (username, email, password, image_url) VALUES ('$username', '$email', '$password','$imgurl')");
}

/* redirect('/'); */
