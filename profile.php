<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>
<?php require __DIR__ . '/app/messages.php'; ?>


<h1>Edit your profile</h1> <br>

<!-- Formulär:uppdatera profilbild-->
<form action="/app/users/editavatar.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="avatar">Edit profile picture</label>
        <br>
        <input type="file" accept=".jpg, .jpeg, .png" name="avatar" id="avatar" required>
        <small class="form-text"> Formats accepted: Jpg, Jpeg or Png. </small>
    </div>
    <button name="picture" type="submit" class="btn btn-secondary">Change my image</button>
    <br>
    <br>
</form>



<!-- Formulär:uppdatera email-->
<form name="email" action="/app/users/editemail.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="email">Update your email-address</label>
        <input class="form-control" type="email" name="email" id="email" value="<?= $_SESSION['user']['email']; ?>" required>
        <small class="form-text">Please write your email address.</small>
        <br>
        <button type="submit" class="btn btn-secondary">Update email</button>

    </div>
</form>
<br>
<!-- Formulär:uppdatera password-->

<form name="password" action="/app/users/editpassword.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="email">Update your password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="add your new password" required>
        <small class="form-text">Please write your email address.</small>
        <br>
        <button type="submit" class="btn btn-secondary">Update password</button>

    </div>

</form>

<?php if ($error !== '') : ?>
    <p class="error"><?= $error; ?></p>
<?php endif; ?>

<?php if ($message !== '') : ?>
    <p class="success"><?php echo $message; ?></p>
<?php endif; ?>

<?php require __DIR__ . '/views/footer.php'; ?>
