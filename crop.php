<?php
require 'functions.php';

//Connect to the database 
    $host = "127.0.0.1";
    $user = "yshepta";              //Your Cloud 9 username
    $pass = "";                     //Remember, there is NO password by default!
    $db = "positions";                  //Your database name you want to connect to
    $port = 3306;                   // The port #. It is always 3306
    
    $conn = mysqli_connect($host, $user, $pass, $db, $port) or die(  mysql_error()  );

//saving coordinates into vars
$x1 = $_POST['x1'];
$x2 = $_POST['x2'];
$y1 = $_POST['y1'];
$y2 = $_POST['y2'];
$tag = $_POST['tag'];
$imageId = $_POST['imageID'];



$sql = "INSERT INTO `positions`.`positions` (`x1`, `x2`, `y1`, `y2`,`tag`) VALUES ($x1, $x2, $y1, $y2, '$tag');";

 if (mysqli_query($conn,$sql) === TRUE) //if response from query is true it means record inserted
    {
        echo "New record created successfully<br>";
    } 
    else  //when response from query is false it means record not inserted
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
$postionsId = mysqli_insert_id($conn) ;
    
$sql = "INSERT INTO tagged (`positions_id`, `saved_images_id`) VALUES ($postionsId, $imageId);";    
    if (mysqli_query($conn,$sql) === TRUE) //if response from query is true it means record inserted
    {
        echo "New record created successfully<br>";
    } 
    else  //when response from query is false it means record not inserted
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    $conn->close();  //close connection to db
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   



header("Location: https://imagescan-yshepta.c9users.io/tagImage.php?image_id=$imageId");    
    
    
    
    
?>



