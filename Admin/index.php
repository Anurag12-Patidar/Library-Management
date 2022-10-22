<?php


?>

<html>
    <head>
        <title>Admin - </title>
    </head>
    <body>
        <h1>
            Welcome Admin
        </h1>

        <br>
        <br>
        <form action="./Actions/add_book.php" method="post" enctype="multipart/form-data">
            <input type="text" name="category">
            <br>
            <br>
            <input type="text" name="book_name">
            <br>
            <br>
            <input type="file" name="photo">
            <br>
            <br>

            <button>Submit</button>
        </form>
    </body>
</html>
