<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo $config['title']; ?></a>

    <!--     Visas i meny när användare är inloggad. -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <?php if (isset($_SESSION['user'])) : ?>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/mylists.php' ? 'active' : ''; ?>" href="/mylists.php">My Lists</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/profile.php' ? 'active' : ''; ?>" href="/profile.php">Edit profile</a>
        </li>
        <li> <a class="nav-link" href="/app/users/logout.php">Logout</a>
        </li>

        <!--     Visas i meny när användare är utloggad. -->
    <?php else : ?>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?>" href="login.php">Login</a>
        <?php endif; ?>
        </li>
    </ul>
</nav>
