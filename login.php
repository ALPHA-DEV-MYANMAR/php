<?php

require_once "core/base.php";
require_once "core/function.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/style.css">
</head>
<body style="background-color: var(--primary-soft)">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <?php
                    if(isset($_POST['loginBtn'])){
                        echo login();
                    }
                    ?>
                    <form method="post">
                        <h4>Login Form</h4>
                        <hr>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" min="8" name="password" required>
                        </div>
                        <div class="form-group float-right">
                            <button name="loginBtn" class="btn btn-primary">Login</button>
                            <a class="btn btn-outline-info" href="register.php">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo $url; ?>/assets/vendor/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $url; ?>/assets/js/app.js"></script>

</body>
</html>