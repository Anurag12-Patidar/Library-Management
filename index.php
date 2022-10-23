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
    <title>Book-It</title>
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
    <?php
//    Get all the categories
    $categories = getAllTheCategoriesOfBooks();
    ?>

    <section>
        <?php
//        Need to get a book category from the database and display it in the div
        for($i=0;$i<count($categories);$i++){
//        Get the books for categories : $categories[$i][0]
//            $BooksData contains the details of the books of a category
        $BooksData = getAllTheBooksForACategory($categories[$i][0]);

        ?>
        <div class="category" id="<?php echo $categories[$i][0] ?>">
            <h1> <?php echo $categories[$i][0]  ?> </h1>
            <?php
//              Display the particular books
            for($j=0;$j<count($BooksData);$j++){
            ?>
                    <div class="book">
                        <img src="./Uploads/<?php echo $BooksData[$j][3]?>" alt="">
                <h3><?php echo $BooksData[$j][2] ?></h3>
                <p><?php echo $BooksData[$j][4] ?></p>
                <p><?php echo $BooksData[$j][5] ?></p>
                    </div>

            <?php
            }
            ?>
        </div>
        <?php
        }
        ?>
    </section>


</body>
</html>