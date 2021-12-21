<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1><?php echo $config['title']; ?></h1>

    <p>This is your home in your profile. </p>

    <?php if (isset($_SESSION['user'])) : ?>
        <p>Welcome, <?php echo $_SESSION['user']['username']; ?>!</p>
        <?php
        if (isset($_SESSION['user']['image_url'])) :
        ?>
            <img src="upload/<?php echo $_SESSION['user']['image_url'] ?>">

    <?php endif;
    endif; ?>


</article>

<?php require __DIR__ . '/views/footer.php'; ?>
