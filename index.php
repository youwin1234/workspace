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
<link rel="stylesheet" type="text/css" href="mainpage.css"/>
<link href='https://fonts.googleapis.com/css?family=Lobster|Noto+Serif' rel='stylesheet' type='text/css'>
         
         
        <title>Image Tagging</title>
        <style type="text/css">
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

<?php
require('functions.php');
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
          <script type="text/javascript" src="jquery.imgareaselect-0.9.10/scripts/jquery.min.js"></script>
          <script type="text/javascript" src="jquery.imgareaselect-0.9.10/scripts/jquery.imgareaselect.pack.js"></script>
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
                                  <h1>Image Tagging</h1>
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
<!-------------content here!!!-------------->
               <style type="text/css">
               .paragraph{
               display: block;
            text-align:center;
            padding:20px 150px 150px;
            
                }
                .RQ {
                    
                    justify-content:center;
                    align-items:center;
                }
                .list{
                    
                    text-align: left;
                    
                }
</style>
   
   
     <div class="paragraph"> 
    <h2>Families become distant and people vanish, so unless people were close to their family members they will not know of every single generation before them. <br></h1>
    <p> In the past people wrote documents and took pictures, people kept records and files of important events. Now, we can find these documents online. The problem is that we do not have a webpage out there that can help us translate words on documents that are not quite readable by computers.We want everyone to be able to trace generations before them and to help them using documents. We chose to make code to transcribe pictures of old documents.</p>
    <h3>How does this work?</h2><!-- SHOUT OUT DR.BJ --><!-- SHOUT OUT DR.BJ -->
        <div class="list">
        <ol>
        <li>Upload an image.</li>
        <li>Rotate image if needed.</li>
        <li>Submit the image.</li>
        <li>Transcribe by tagging.</li>
        <li>Now people can search and tag the image.</li>
        </ol>
   </div>
    <p><br></p>
  <a rel='nofollow' href='http://www.qrcode-generator.de' border='0' style='cursor:default' class="RQ"><img src='https://chart.googleapis.com/chart?cht=qr&chl=https%3A%2F%2Fimagescan-yshepta.c9users.io%2Findex.php&chs=180x180&choe=UTF-8&chld=L|2' alt=''></a>
       
<!-----until here------>
<footer>
              <div class="footer1">
                     <p id="foot">Last Motified:08/08/2016 &copy;LakeView Students</p>
                     </div>
    </div>
        </footer>
    </body>
</html>
<!--"images/" . $imageFileName-->




