<?php
include ('connect.php');

//TODO : check if the username is already present in the table
//Done
// verified
function checkDuplicateUserByUsername($username){
    /*
     * return : true  if no user is present with such username
     *  else : return false
     *
     *
     * required before adding a new user in database
     * */
    $query = "select id,username,email from `user` where username='$username';";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return true;
    }
    return false;

}

//Done
//verified
function addUserToTheDatabase($username,$password,$email){
    /*
     * return : true if user is added successfully
     *  else: return false
     *
     *
     * Adding the user to the database
     *
     * check if it already exists using checkDuplicateUserByUsername($username)
     * */
//    TO verify whether the username is unique or not
    $verify = checkDuplicateUserByUsername($username);
    if($verify){
        return false;
    }
    $query = "insert into user (username,password,email) values ('$username','$password','$email')";
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }

    return false;
}

// TODO:  Check the function  -   Create function to validate the user creadentials
function checkUserByUsernameAndPassword($username,$password){
    /*
     * return : data if user is present with the $username and $password
     *  else : false
     *
     * */
    $query = "select id,username,email from `user` where username='$username' and password = '$password'";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data[0];
    }
    return false;
}




