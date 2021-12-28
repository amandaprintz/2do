<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logik: updatera lösenord */
/* Kollar om ett nuvarande password finns och skapar en ny variabel med nytt password. */
if (isset($_POST['password'])) {
    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $statement = $database->prepare('UPDATE users SET password = :password WHERE id = :id');
    $statement->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_STR);
    $statement->bindParam(':password', $newPassword);
    $statement->execute();


    $_SESSION['message'] = 'Your password has been updated successfully!';
    redirect('/profile.php');
} else {
    $_SESSION['message'] = 'Sorry! Try filling in another password!';
    redirect('/profile.php');
}




redirect('/');
