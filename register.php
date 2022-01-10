<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>
<?php require __DIR__ . '/app/messages.php'; ?>


<article>
    <!-- Form to create an account on the to-do list website -->
    <h1>Create an account</h1> <br>
    <form action="/app/users/register.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="username">Name</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="" required>
            <small class="form-text">Choose your username.</small>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="yourmail@mail.com" required>
            <small class="form-text">Register your email address.</small>
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" minlength="16" required>
            <small class="form-text"> Choose your password.</small>
        </div>

        <button type="submit" class="btn btn-secondary">Create an account</button>

    </form>
</article>


<?php require __DIR__ . '/views/footer.php'; ?>
