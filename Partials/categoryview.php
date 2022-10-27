<?php

session_start();
include ('../Actions/functions.php');
if(!isset($_POST['category'])){
    echo "
    <script> 
        window.location='../'
    </script>
    ";
}

if(!isset($_SESSION['bookit-username'])){
    echo "
    <script> 
        alert('Need to login before going further')
        window.location='../'
    </script>
    ";
}
$username = $_SESSION['bookit-username'];
$categories = $_POST['category'];
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-It</title>
</head>
<body>
<?php echo $categories; ?>
<!--Navigation-->
<?php
    if($username){
//            Username if found in the session so display the username and the button to logout
    ?>
    Welcome back : <?php echo $username ?>
    <br>
    <a href="../Actions/logout.php"><button>Logout</button></a>
        <a href="../"><button>Back</button></a>
    <?php
}
?>
<!--Navigation ends-->

<!--Main Category part starts-->
<?php
// Contains the data of the books of the category
    $BooksData = getAllTheBooksForACategory($categories);
?>
<div class="category" id="<?php echo $categories; ?>">
    <h1> <?php echo $categories ?> </h1>
    <?php
    //Display the particular books
    for($j=0;$j<count($BooksData);$j++){
        ?>
        <div class="book">
            <img src="../Uploads/<?php echo $BooksData[$j][3]?>" alt="">
            <h3><?php echo $BooksData[$j][2] ?></h3>
            <p><?php echo $BooksData[$j][4] ?></p>
            <p><?php echo $BooksData[$j][5] ?></p>
            <form action="./detailview.php" method="post">
                <input type="hidden" name="book" value="<?php echo $BooksData[$j][0] ?>">
                <button>More</button>
            </form>
        </div>

        <?php
    }
    ?>
</div>
<!--Main Category part ends-->

<!--Copyright starts-->

<!--Copyright ends-->

</body>
</html>
