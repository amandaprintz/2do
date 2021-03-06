<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1>Login</h1> <br>
    <!-- Form: log in to your users page -->
    <form action="app/users/login.php" method="post">
        <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="email@email.com" required>
            <small class="form-text">Please write your email address.</small>
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" minlength="16" required>
            <small class="form-text">Please write your password.</small>
        </div>

        <button type="submit" class="btn btn-secondary">Login</button>
    </form>

    <br>
    <form method="get" action="/register.php">
        <button type="submit" class="btn btn-secondary">Sign up</button>
    </form>


</article>


<?php require __DIR__ . '/views/footer.php'; ?>
