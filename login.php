<?php 

    session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="sign-in.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <!-- Nav bar  -->
        <?php include('nav.php'); ?>
        
    </div>

    <main class="form-signin w-100 m-auto">
        <form action="login_db.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            
            <?php if (isset ($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                          echo $_SESSION['error'];
                          unset($_SESSION['error']);
                     ?>
                </div>
            <?php } ?> 

            <div class="form-floating my-2 ">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating my-2 ">
                <input type="password" class="form-control" name="password"  id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            
            <button class="btn btn-primary w-100 py-2" name="login" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">Don't have an account yet? <a href="register.php">register</a></p>
        </form>
    </main>

    <div class="container">
        <!-- Footer -->
        <?php include('footer.php'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>