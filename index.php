

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="signup.php" method="POST">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" class="form-input" name="uid" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" class="form-input" name="mail" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="form-input" name="pwd" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" class="form-input" name="pwd-repeat" placeholder="Retype password"/>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit"class="form-submit" name="signup-submit">Sign up</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="colorlib-regform-7/images/campus.jpg" alt="sign up image"></figure>
                        <form action="signup.php" method="POST">
                            <p class="loginhere">
                                Already have an account ? <a href="login.php" class="loginhere-link">Login Here</a>
                            </p>
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