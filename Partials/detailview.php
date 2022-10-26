<?php
session_start();
include ('../Actions/functions.php');

if(!isset($_POST['book'])){
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
?>



<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-It</title>
</head>
<body>
    <?php
        $bookid = $_POST['book'];
        $dataOfBook = getBookDetailsById($bookid);
        /*
         * data of the book is found and is stored in $dataOfBook
         * */
    ?>

<!--Navigation    -->
    <a href="../">
        <button>Back</button>
    </a>
<!--Navigation ends    -->

    <div class="book">
                <h1>Name : <?php echo $dataOfBook[2] ?></h1>
                <h3>Author : <?php echo $dataOfBook[4] ?></h3>
                <h3>Category : <?php echo $dataOfBook[1] ?></h3>
                <img src="../Uploads/<?php echo $dataOfBook[3] ?>" alt="">
                <h3> Publication : <?php echo $dataOfBook[5] ?></h3>
                <h3>Year Of Publication : <?php echo $dataOfBook[6] ?></h3>
                <a href="<?php echo $dataOfBook[7] ?>" target="_blank">
                    <button>AMAZON</button>
                </a>
    </div>
</body>
</html>
