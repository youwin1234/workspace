<?php

require 'functions.php';
$IDGET = $_GET['id'];
deleteImage($IDGET);



header('Location: https://imagescan-yshepta.c9users.io/dbimages.php');  
?>

