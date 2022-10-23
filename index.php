<?php
session_start();
$username = null;
$email=null;
$id=null;

if(isset($_SESSION['bookit-username'])){
    $username = $_SESSION['bookit-username'];
    $id = $_SESSION['bookit-id'];
    $email = $_SESSION['bookit-email'];
}
include ('./Actions/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <?php
//    Navigation for the user
        if($username){
//            Username if found in the session so display the username and the button to logout
            ?>
            Welcome back : <?php echo $username ?>
            <br>
            <a href="./Actions/logout.php"><button>Logout</button></a>

    <?php
        }else{
//            No user is found , so link to login
            ?>
            <a href="./Partials/login.php"><button>Login</button></a>
            <br>
            <br>
            <a href="./Partials/register.php"><button>Register</button></a>
            <?php
        }
    ?>

<!--Section to display the Books-->
    <section>
        <?php
//        Need to get a book category from the database and display it in the div

        ?>
        <div>

        </div>
        <?php


        ?>
    </section>


</body>
</html>