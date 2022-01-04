<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>
<?php require __DIR__ . '/app/messages.php'; ?>


<h1>Edit your profile</h1> <br>
<div class="edit-profile">
    <img src="upload/<?php echo $_SESSION['user']['image_url'] ?>">
</div>
<!-- Form: update profile pic-->
<form action="/app/users/editavatar.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="avatar">Edit profile picture</label>
        <br>
        <input type="file" accept=".jpg, .jpeg, .png" name="avatar" id="avatar" required>
        <small class="form-text"> Your picture can be either a jpg, jpeg or png. </small>
    </div>
    <button name="picture" type="submit" class="btn btn-secondary">Change my image</button>
</form>
<br>
<!-- Form: update email-->
<form name="email" action="/app/users/editemail.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="email">Update your email-address</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="add your new email" required>
        <small class=" form-text">Please write your email address.</small>
        <button type="submit" class="btn btn-secondary">Update email</button>
    </div>
</form>
<!-- Form: update password-->
<form name="password" action="/app/users/editpassword.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="email">Update your password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="add your new password" required>
        <small class="form-text">Please write your email address.</small>
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
