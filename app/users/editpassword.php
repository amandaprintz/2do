<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic: update password */
/* Checks if a current password exists and creates a new variable with a new password. */
if (isset($_POST['password'])) {
    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $statement = $database->prepare('UPDATE users SET password = :password WHERE id = :id');
    $statement->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_STR);
    $statement->bindParam(':password', $newPassword);
    $statement->execute();

    /* Message: lets us know if the password  was successfully uploaded. */
    $_SESSION['message'] = 'Your password has been updated successfully!';
    redirect('/profile.php');
} else {
    $_SESSION['message'] = 'Sorry! Try filling in another password!';
    redirect('/profile.php');
}


redirect('/');
