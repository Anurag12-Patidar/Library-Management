
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/styling/login.css">
<!--    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">-->
</head>
<body>
<!--    -->
<form action="../Actions/login.php" method="post" class="login-box" autocomplete="on">
    <div class="title">
        <h1>LOGIN</h1>
    </div>
    <div class="input-box">
        <input type="text" name="username" required class="input" id="username">
        <label for="username">Username</label>
    </div>
    <div class="input-box">
        <input type="password" name="password" required class="input pass-input" id="password">
<!--        <img src="assets/img/view.png" class="view-pass" alt="">-->
        <label for="password">Password</label>
    </div>
    <div class="remember-me">
        <input type="checkbox" checked name="" id="checkbox">
        <label for="checkbox">Remember Me</label>
    </div>
    <button type="submit">Login To Website</button>
    <div class="auth-action">
        <a href="./register.php">Sign Up</a>
        <a href="#">Forget Password?</a>
    </div>
</form>
<!---->
<script src="../Assets/js/login.js"></script>
</body>
</html>