<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/styling/register.css">
</head>
<body>
<!--    <h1>Regsiter login</h1>-->
<!---->
<!--    <form action="../Actions/register.php" method="post">-->
<!--        <input type="text" name="username" placeholder="Enter the username" >-->
<!--        <br>-->
<!--        <br>-->
<!--        <input type="password" name="password" placeholder="Enter the password" >-->
<!--        <br>-->
<!--        <br>-->
<!--        <input type="email" name="useremail" placeholder="Enter the email">-->
<!--        <br>-->
<!--        <br>-->
<!--        <button>Register</button>-->
<!--    </form>-->
<!---->
<!--    <a href="./login.php">Login Page</a>-->
<!---->
<!--    <a href="../">Home Page</a>-->

<div class="container" id="container">

    <div class="form-container sign-in-container">
        <form action="../Actions/register.php" method="post">
            <h1>Sign Up</h1>
            <input type="text" placeholder="Username" name="username"/>
            <input type="email" placeholder="Email" name="email"/>
            <input type="password" placeholder="Password" name="password"/>

            <button class="cover">Sign Up</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">

            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost cover" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>