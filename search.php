<?php

require('functions.php');
?>




<form action="search.php" method="POST">
<input type="text" name="searchTerm">
<input type="submit">
</form>



<a href='dbimages.php'> Library of images </a>
<br>
        <a href='newImage.php'> Add Image </a>
        
        <br><br>

<?php
$searchTerm = $_POST['searchTerm'];

$imageIds = findTags($searchTerm);
if (count($imageIds) == 0) {
    
    echo "no match";
} else {
getAllImages($imageIds);
}
?>