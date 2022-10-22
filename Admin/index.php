<?php

include ('./Actions/functions.php');
$totalBooks = getTotalBooks();
$totalCategory = getTotalCategory();

?>

<html>
    <head>
        <title>Admin - </title>
    </head>
    <body>
        <h1>
            Welcome Admin
        </h1>



        <h3>Total Book listed are : <?php echo $totalBooks?> </h3>
        <h3>Total Category listed are : <?php echo $totalCategory?> </h3>
        <br>
        <br>
        <h2>Add Another Book</h2>
        <form action="./Actions/add_book.php" method="post" enctype="multipart/form-data">
            <input placeholder="Book Category" type="text" name="category" required>
            <br>
            <br>
            <input placeholder="Book Name" type="text" name="book_name" required>
            <br>
            <br>

            <input type="text" name="author" placeholder="Book Author" required>
            <br>
            <br>
            <input type="text" name="publication" placeholder="Book Publication" required>
            <br>
            <br>
            <input type="text" name="year" placeholder="Book Publication Year" required>
            <br>
            <br>
            <input type="file" name="photo" placeholder="Image" required>
            <br>
            <br>
            <button>Submit</button>
        </form>
    </body>
</html>
