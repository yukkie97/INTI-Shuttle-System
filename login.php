<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/css/style.css">
    <link rel="stylesheet" href="colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/css/style.css">

</head>
<body>

<div class="main">
<!--  Login  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="colorlib-regform-7/images/computer.jpg" alt="sign in image"></figure>
                <form action="login.php" method="POST">
                    <p class="loginhere">
                        Haven't register? <a href="index.php" class="loginhere-link">Register here</a>
                    </p>
                </form>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" class="form-input" name="uid" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" class="form-input" name="pwd" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <button type="submit"class="form-submit" name="login-submit">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

</div>

<!-- JS -->
<script src="colorlib-regform-7/vendor/jquery/jquery.min.js"></script>
<script src="colorlib-regform-7/js/main.js"></script>
<script src="colorlib-regform-7/vendor/jquery/jquery.min.js"></script>
<script src="colorlib-regform-7/js/main.js"></script>

</body>
</html>
