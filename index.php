<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <!--  <h1><?php echo $config['title']; ?></h1> -->

    <div class="login-intro">
        <?php if (isset($_SESSION['user'])) : ?>
            <p>Welcome, <?php echo $_SESSION['user']['username']; ?>! </p>

        <?php endif;
        ?>

    </div>
    <!--     <p>Go to the tab My Lists to begin planning.</p>
 -->
</article>

<?php require __DIR__ . '/views/footer.php'; ?>
