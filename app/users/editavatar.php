<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';


/* Logik: ladda upp & uppdatera profilbild. */
if (isset($_POST['picture'], $_FILES['avatar'])) {

    $avatarImage = trim(filter_var($_FILES['avatar']['name'], FILTER_SANITIZE_STRING));
    $filename = $_SESSION['user']['id'] . $avatarImage;
    $destination =  __DIR__ . '/../../upload/' . $filename;
    move_uploaded_file($_FILES['avatar']['tmp_name'], $destination);
    $message = 'The file is uploaded';

    $insertSQL = ("UPDATE users SET image_url = :image_url_location WHERE id = :id");

    $sql = $database->prepare($insertSQL);

    $sql->bindParam(':image_url_location', $filename, PDO::PARAM_STR);

    $sql->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);

    $sql->execute();

    $sql = $database->prepare('SELECT * FROM users WHERE id = :id');

    $sql->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);

    $sql->execute();

    $_SESSION['user'] = $sql->fetch(PDO::FETCH_ASSOC);

    $_SESSION['message'] = "Profile-picture is sucessfully uploaded";
}



redirect('/index.php');
?>

<img src="<?= $destination ?>">
