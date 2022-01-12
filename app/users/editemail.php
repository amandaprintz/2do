<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic: update email */
if (isset($_POST['email'])) {
    $newEmail = $_POST['email'];
    $statement = $database->prepare('UPDATE users SET email = :email WHERE id = :id');
    $statement->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_STR);
    $statement->bindParam(':email', $newEmail);
    $statement->execute();

    /* Message: lets us know if the email was successfully uploaded. */
    $_SESSION['message'] = 'Your email has updated successfully!';
    redirect('/profile.php');
} else {
    $_SESSION['message'] = 'Sorry! Try again!';
    redirect('/profile.php');
}

redirect('/index.php');



redirect('/');
