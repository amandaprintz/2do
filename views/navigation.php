<nav class="navbar navbar-expand-lg navbar-dark">
    <!-- Calling the profile imgage chosen for this specific user.  -->

    <?php if (isset($_SESSION['user']['image_url'])) : ?>
        <div class="profile">
            <img src="upload/<?php echo $_SESSION['user']['image_url'] ?> ">
        </div>
    <?php endif;
    ?>
    <!-- Showing the websites name and you are directed to the index page when clicking on it.  -->
    <a class="navbar-brand" href="http://localhost:8000/index.php"><?php echo $config['title']; ?></a>

    <!--     These links are visible when you are LOGGED IN. -->
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

        <!--     These links are visible when you are LOGGED OUT. -->
    <?php else : ?>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?>" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/register.php' ? 'active' : ''; ?>" href="register.php">Create an account</a>
        </li>

    <?php endif; ?>
    </ul>


</nav>
