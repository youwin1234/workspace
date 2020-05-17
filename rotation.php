<?php

$imagePath = 'images/';


function rotate($degrees, $file) 
{
        $img = imagecreatefromjpeg ($file); 

        $imgRotated = imagerotate ($img, $degrees,  imagecolorallocatealpha($img, 0, 0, 0 , 127));
        
        $pos1 = stripos($file, ".jpg");
        $fileName = substr($file, 0, $pos1);
        
//echo $fileName;

        $newFilename = $fileName . ".jpg";
        
        imagejpeg($imgRotated, $newFilename, $degrees); 
        
        imagedestroy($imgRotated);

        return $newFilename;

}



        $deg = $_GET['degrees'];
        $file_name = $_GET['file_name'];
        $nFilename = rotate($deg, $imagePath.$file_name);


       header('Location: https://imagescan-yshepta.c9users.io/dbimages.php');  

?>

