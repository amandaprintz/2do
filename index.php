<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <!--  <h1><?php echo $config['title']; ?></h1> -->

    <!--     <p>This is your home page. </p> -->

    <div class="login-intro">
        <?php if (isset($_SESSION['user'])) : ?>
            <p>Welcome, <?php echo $_SESSION['user']['username']; ?>! </p>

        <?php endif;
        ?>

        <div class="image-parent">
            <div class="image-child"><img src="/assets/images/intropicture.png" alt="two humans with a to-do list "></class>
            </div>
        </div>
    </div>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>
