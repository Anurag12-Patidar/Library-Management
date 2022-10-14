<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Regsiter login</h1>

    <form action="../Actions/register.php" method="post">
        <input type="text" name="username" placeholder="Enter the username" >
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter the password" >
        <br>
        <br>
        <input type="email" name="useremail" placeholder="Enter the email">
        <br>
        <br>
        <button>Register</button>
    </form>
    <br>
    <br>
    <a href="./login.php">Login Page</a>
    <br>
    <br>
    <br>
    <a href="../">Home Page</a>
</body>
</html>