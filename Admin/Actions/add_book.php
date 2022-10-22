<?php

$bookName = $_POST['book_name'];
$category = $_POST['category'];


// Photo
$photo = $_FILES['photo']['name'];
$tempphoto = $_FILES['photo']['tmp_name'];
// to move the Book file
move_uploaded_file($tempphoto,"../../Uploads/$photo");

echo "<script>
alert('file was successfully moved')
    </script>

";

