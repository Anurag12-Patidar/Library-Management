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
<h1>Book-IT</h1>
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
<h2>Categories</h2>
    <?php
//    Get all the categories
    $categories = getAllTheCategoriesOfBooks();
    if(!$categories){
        ?>
        <div class="nobookfound">
            <h5>Soory no books available at this time</h5>
        </div>
    <?php
    }else{
        ?>
        <section>
            <?php
            //        Need to get a book category from the database and display it in the div
            for($i=0;$i<count($categories);$i++){
//        Get the books for categories : $categories[$i][0]
//            $BooksData contains the details of the books of a category
                ?>
                <div class="main-category">
                   <h3> <?php echo $categories[$i][0] ?> </h3>
                    <p>Content of the Category</p>
                    <form action="./Partials/categoryview.php" method="post">
                        <input type="hidden" name="category" value="<?php echo $categories[$i][0] ?>">
                        <button>More</button>
                    </form>
                </div>
            <?php
            }
            ?>
        </section>
        <?php
    }
    ?>




</body>
</html>