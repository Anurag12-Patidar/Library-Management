<?php
include ('connect.php');

function addUserToTheDatabase($username,$password,$email){
    $query = "insert into user (username,email,password) values ('$username','$password','$email')";
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }

    return false;
}


function checkUserByUsername($username,$password){
    $query = "select id,username,email from `user` where username='$username' and password = '$password'";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data[0];
    }
    return false;
}