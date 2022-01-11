<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>


<article>
    <!--  <h1><?php echo $config['title']; ?></h1> -->

    <!-- A small welcome message to the user that just logged in -->
    <div class="login-intro">
        <?php if (isset($_SESSION['user'])) : ?>
            <h2>Welcome, <?php echo $_SESSION['user']['username']; ?>! </h2>
            <p> <?php echo "Today is " . date("l jS \of F"); ?>.</p>

            <div class="welcome-box">
                <h2>These are your plans and tasks for today. </h2>
                <br>

                <?php $taskToday = getTodaysTasks($database); ?>

                <?php foreach ($taskToday as $task) : ?>
                    <ul>
                        <p>● <?= "&nbsp&nbsp" ?><?= $task['title'];
                                                echo "&nbsp&nbsp&nbsp" ?> </b>
                            <i> <?= $task['description']; ?></i>
                            <!-- <?= $task['deadline']; ?> -->
                    </ul>
                    </p>
                <?php endforeach; ?>


                <div class="to-see">



                    <button class="btn btn-secondary"> <a href=/mylists.php>View all tasks</button></a>
                </div>
            </div>
        <?php endif; ?>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>
