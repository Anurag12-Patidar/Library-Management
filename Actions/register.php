<?php
include ('functions.php');
    $username= $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['useremail'];




$data = addUserToTheDatabase($username,$password,$email);
if($data){
    echo " <script> alert('user added successfully') </script> ";
}else{
    echo " <script> alert('Unable to add user') </script> ";

}

echo "Username -> $username";
echo "<br>";
echo "<br>";
echo "Password -> $password";
echo "<br>";echo "<br>";
echo "EMail -> $email";

?>