<?php

session_start();
require './FBInit.php';

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        header("Location: home.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="main-container">
        <div class="login-form">
            <h2>Login</h2>

            <?php if (isset($error)) : ?>
                <p class="error-message">Username / Password salah !</p>
            <?php endif; ?>

            <form action="" method="post">
                <input type="text" name="username" placeholder="Name">
                <input type="password" name="password" placeholder="Password">
                <button type="Submit" name="submit" class="button">Login</button>
            </form>

            <div class="login-fb">
                <p>Or</p>
                <a href="<?php echo $login_url; ?>">
                    <div class="login-fb-btn">
                        <p>Login with <span>Facebook</span></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>