<?php
require('functions.php');
$tags = getTagsArray();
makePositions();
?>

<!--
<style type="text/css">
     .map{
    position: absolute;
    top: 900px;
    left: 400px;
    width: 250px;
    height: 250px;
        }
</style> -->
<ul class = "map">
<?php foreach ($tags as $value) {
    echo("<li><a class='$value'>$value</a></li>");
    //for($x=0;$x<$tags)
}?>

</ul>

<?php foreach ($tags as $value) {
    echo("<li>$value</li>");
}?>

</ul>