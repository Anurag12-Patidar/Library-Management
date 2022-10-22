<?php
include ('functions.php');

$bookName = $_POST['book_name'];
$category = $_POST['category'];
$author = $_POST['author'];
$publication = $_POST['publication'];
$year = $_POST['year'];

// Photo
$photo = $_FILES['photo']['name'];
$tempphoto = $_FILES['photo']['tmp_name'];

// to move the Book file
move_uploaded_file($tempphoto,"../../Uploads/$photo");

echo "<script>
alert('file was successfully moved')
    </script>

";


// adding to the database
/*
 *
function addBookDataToTheDatabase($bookName,$category,$author,$publication,$year,$photo){

 * */
$status = addBookDataToTheDatabase($bookName,$category,$author,$publication,$year,$photo);

if(!$status){
    echo "<script>
        alert('unable to add the data , please try again later')
        window.location='../';
    </script>

";
}



echo "Book was added successfully";