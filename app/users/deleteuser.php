<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic: delete user */
if (isset($_POST['password'])) :
    $password = $_POST['password'];

    $statement = $database->prepare('SELECT password from users WHERE id = :id');
    $statement->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    $statement = $database->prepare('SELECT id FROM lists WHERE user_id = :user_id');
    $statement->bindParam(':user_id', $_SESSION['user']['id'], PDO::PARAM_INT);
    $statement->execute();

    $lists = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (!password_verify($password, $user['password'])) :
        $_SESSION['message'] = 'Wrong password, try again!';
        redirect('/profile.php');
    else :
        foreach ($lists as $list) :
            $statement = $database->prepare('DELETE FROM tasks WHERE list_id = :list_id');
            $statement->bindParam(':list_id', $list['id'], PDO::PARAM_INT);
            $statement->execute();
        endforeach;

        $statement = $database->prepare('DELETE FROM lists WHERE user_id = :user_id');
        $statement->bindParam(':user_id', $_SESSION['user']['id'], PDO::PARAM_INT);
        $statement->execute();

        $statement = $database->prepare('DELETE FROM users WHERE id = :id');
        $statement->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
        $statement->execute();

        unset($_SESSION['user']);
        session_destroy();

        $_SESSION['confirm'][] = 'The account was successfully deleted.';

        redirect('/login.php');
    endif;
endif;
