<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';
require __DIR__ . '/Users/amandakarlsson/Desktop/2do/app/users/register.php';



/* Logik: registrera ny användare */
/* användarnamn, email och password sanitizas, valideras, hashas - sparas sedan i separata variablar. */
if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    /* Läggs till i databas. */
    $sql = "INSERT INTO users (username, email, password) VALUES (':username', ':email', ':password')";

    $statement = $database->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);

    /* Koden körs*/
    $statement->execute();
}



redirect('/');
