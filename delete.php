<?php
require ('functions.php');
$IDGET = $_GET['id'];
$imageId = $_GET['image_id'];
delete($IDGET);
header("Location: https://imagescan-yshepta.c9users.io/tagImage.php?image_id=$imageId");  
?>