<?php

include ('connect.php');

function getTotalBooks(){
/*
 * return : total books in the database
 *
 * need to return the total books listed in the database
 *
 * */
    $query = 'select count(id) from `books`';
    $result = mysqli_query($GLOBALS['con'],$query);
    $data =  mysqli_fetch_all($result);

    return $data[0][0];
}

function getTotalCategory(){
    /*
     * return : total distinct categories in the database
     *
     * need to return the distinct book categories
     * */

    $query = 'select count(DISTINCT(category)) from `books`;';
    $result = mysqli_query($GLOBALS['con'],$query);
    $data =  mysqli_fetch_all($result);

    return $data[0][0];

}

function addBookDataToTheDatabase($bookName,$category,$author,$publication,$year,$photo){
    /*
     * return : true if data is added successfully
     *          else: false if data is not added successfully
     *
     * adding the book data to the database
     * */
        $query = "insert into books (category,bookname,image,bookauthor,bookpublication,bookyear) 
                    values (
                            '$category','$bookName','$photo','$author','$publication','$year'
                    ) ";
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }

    return false;
}
