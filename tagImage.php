<?php
require('functions.php');
?>

<!DOCTYPE html>
<html>
    <head>
<link rel="apple-touch-icon" sizes="57x57" href="imagetagging.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="imagetagging.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="imagetagging.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="imagetagging.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="imagetagging.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="imagetagging.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="imagetagging.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="imagetagging.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="imagetagging.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="imagetagging.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="imagetagging.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="imagetagging.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="imagetagging.ico/favicon-16x16.png">
<link rel="manifest" href="imagetagging.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="imagetagging.ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">          
<link rel="stylesheet" type="text/css" href="960-Grid-System-master/code/css/min/960_12_col.css"/>
<link rel="stylesheet" type="text/css" href="document.css"/>
<link href='https://fonts.googleapis.com/css?family=Lobster|Noto+Serif' rel='stylesheet' type='text/css'>
           
      <title>Currently Tagging An Image</title>

<style type="text/css">
        
.centerDiv{
    margin-left: auto;
    margin-right: auto;
}
#contextmenu{
    background-color:#DDD;
    border-style:solid;
    border-width:1px;
    width:100px;
    display:none;
    position: absolute;
    z-index:1;
}
#imgPlace {
      position: relative;
  display: table;
  height: 100%;
  vertical-align: middle !important;
  margin-left: auto;
  margin-right: auto;
}
#photo {
    height: 100%;
  position: float;
  position: relative;
  display: block;
  vertical-align: middle !important;
  margin-left: auto;
  margin-right: auto;
  
}
#tag{
  position:absolute;
  top:137px;
  left:264px;
  background-color: #aaaaaa;
  text-shadow:-1px -2px #666666;
  border-width: 2px;
  border-color: #0088dd;
}





<?php
// pull image name from saved_images

$imageId = $_GET["image_id"];
$imageFileName = getImageFileName($imageId);
$imagePath = "images/" . $imageFileName;
$tags = getTagsArray();
makePositions($imageId);

?>
        </style>
          <link rel="stylesheet" type="text/css" href="jquery.imgareaselect-0.9.10/css/imgareaselect-default.css" />
        <!--  <link rel="stylesheet" type="text/css" href="images.css" />-->
        
        
        <!--old-->
        <!--old
          <script type="text/javascript" src="jquery.imgareaselect-0.9.10/scripts/jquery.min.js"></script>
          
          <script type="text/javascript" src="jquery.imgareaselect-0.9.10/scripts/jquery.imgareaselect.pack.js"></script>
          -->
        <!--updated version-->
          <script type="text/javascript" src="imgareaselect-1.0.0-rc.1/distfiles/scripts/jquery.min.js"></script>
          <script type="text/javascript" src="imgareaselect-1.0.0-rc.1/jquery.imgareaselect.min.js"></script>
        
          
          <!--hover over jquery-->
          <script>
<?php
          makeJqueryTagChoiceHover($imageId);
?>
          </script>
          
    <!--Right Click Menu-->
             <div id="contextmenu">
            <table>
                <tr>
                    <td id="TagImage">Tag Image</td>
                </tr>
            </table>
        </div>
         
    </head>
    
    
    
    <body>
            <header>
                    <div class= "container">
                      <div class="header">          
                        <img src="WebsiteImg/LOGO1.png" height="200px"></img>
                        <h1> Image Tagging</h1>
        <a class="click" href="newImage.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get Started</a>  
                      </div>
                    </div>
            </header>
            <div class= "container">
                                 <nav class="box">
                                                <a href="index.php" class="click2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                             <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <a href= "dbimages.php" class="click2">&nbsp;&nbsp;&nbsp;&nbsp;View docuemts&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                               <a href= "newImage.php" class="click2">Submit a document</a>    
                                     </nav>
<div class="main">
 <!-------------content here!!!--------------->
<?php

echo("<a href='db_functions.php?id=$imageId'><img src='images/trash.svg' height='50' width='50' title='Delete Image'></img></a>");
echo('<br>'); 
echo("<button type='button'>Hide Tags</button>");
echo('<br>'); 
echo('<br>'); 
echo("<div class='centerDiv'>Add a tag to the image by drawing a rectangle over the area on the image you want to tag.</div>");
echo('<br>'); 
echo('<br>'); 
 
?>

                    <div id="imgPlace">
                        <img src="<?php echo $imagePath; ?>" id="photo" width='1000'/>
                        <?php
                            makeTagsandIDsForImage($imageId);
                        ?>
            
                    </div>
                    <form action="crop.php" name="tagit" id="tagit" method="post" >
                          <input type="hidden" name="x1" value="" />
                          <input type="hidden" name="y1" value="" />
                          <input type="hidden" name="x2" value="" />
                          <input type="hidden" name="y2" value="" />
                         <input type="hidden" name="imageID" value="<?php echo($imageId); ?>"/>
                          <input type="hidden" name="tag" value="" placeholder="Place Writing for Tag Here.."/>
 <!--                         <input type="submit" name="submit" value="Submit" title="Submit Tag" id="submitTag"/>   -->
                    </form>
                    <?php 
                       // getTags();
                        makeImageTags($imageId);
                    ?>
                    
                    
                    <script type="text/javascript" src="main.js">    </script>                
     <!--------------------until here------------------->               
<footer>
              <div class="footer1 ">
                     <p id="foot">Last Motified:08/08/2016 &copy;LakeView Students</p>
                     </div>
</footer>   
    </body>
</html>
<!--"images/" . $imageFileName-->


