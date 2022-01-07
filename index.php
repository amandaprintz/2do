<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <!--  <h1><?php echo $config['title']; ?></h1> -->

    <!-- A small welcome message to the user that just logged in -->
    <div class="login-intro">
        <?php if (isset($_SESSION['user'])) : ?>
            <h2>Welcome, <?php echo $_SESSION['user']['username']; ?>! </h2>
            <p> <?php echo "Today is " . date("l jS \of F Y "); ?>

            </p>
        <?php endif;
        ?>
    </div>


    <div class="welcomeBox">
        <p>These are your plans and tasks for today. </p>
    </div>





</article>

<?php require __DIR__ . '/views/footer.php'; ?>
