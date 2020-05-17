<?php

require 'functions.php';

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
<link rel="stylesheet" type="text/css" href="images.css"/>
<link href='https://fonts.googleapis.com/css?family=Lobster|Noto+Serif' rel='stylesheet' type='text/css'>
           
        <title>Stored Images</title>
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
#tag{
  position:absolute;
  top:137px;
  left:264px;
  background-color: #aaaaaa;
  text-shadow:-1px -2px #666666;
  border-width: 2px;
  border-color: #0088dd;
}


        </style>
          <link rel="stylesheet" type="text/css" href="jquery.imgareaselect-0.9.10/css/imgareaselect-default.css" />
        <!--  <link rel="stylesheet" type="text/css" href="images.css" />-->
          <script type="text/javascript" src="jquery.imgareaselect-0.9.10/scripts/jquery.min.js"></script>
          <script type="text/javascript" src="jquery.imgareaselect-0.9.10/scripts/jquery.imgareaselect.pack.js"></script>


    <!-- #####START###NANOGALLERY##REQ######################################################################################################## -->
    <!-- jQuery                                                                                                               -->
    <script type="text/javascript" src="nanoGALLERY-5.9.1/third.party/jquery-1.7.1.min.js"></script>
    <!-- nanoGALLERY CSS files                                                                                                -->
    <!-- only include the css file corresponding to the selected theme                                                        -->
    <!-- include 'nanogallery.css' if no theme is specified                                                                   -->
    <!-- nanoGALLERY - default theme css file                                                                                 -->
    <link href="nanoGALLERY-5.9.1/css/nanogallery.css" rel="stylesheet" type="text/css">
    
    <!-- nanoGALLERY javascript                                                                                               -->
    <script type="text/javascript" src="nanoGALLERY-5.9.1/jquery.nanogallery.js"></script>

    <script>
		$(document).ready(function () {
    

		jQuery("#nanoGallery").nanoGallery({thumbnailWidth:160,thumbnailHeight:160,
				itemsBaseURL:'images',
				thumbnailHoverEffect:[{'name':'scaleLabelOverImage','duration':300},{'name':'borderLighter'}],				
				colorScheme:'clean',
                locationHash: false,
				thumbnailLabel:{display:true,position:'overImageOnTop', align:'center'},
                viewerDisplayLogo:true
			});
		});
    </script>
    <!-- #####END###NANOGALLERY##REQ######################################################################################################## -->


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
<form action="dbimages.php" method="POST">
<input type="text" name="searchTerm" placeholder="Search For Tags Here..">
<input type="submit" title="Search for Tag">
</form>
 
<?php
            $searchTerm = $_POST['searchTerm'];
            $imageIds = array();
            
            if( isset($searchTerm) ) //see if user submitted searchTerm
            {
                    $imageIds = findTags($searchTerm);//get id of images that have searched tag term
                    if (count($imageIds) == 0) //if no results found
                    {
                        
                        echo "no match";
                    } 
                    else //display results found
                    {
                        getAllImages($imageIds);
                    
                    }
            }
            else
            {
                getAllImages($imageIds);    
                    
            }       
?>
 </div> 
<!--------------------until here------------------->               
<footer>
              <div class="footer1 ">
                     <p id="foot">Last Motified:08/08/2016 &copy;LakeView Students</p> 
                     </div>
               <!-- SHOUT OUT DR.BJ -->
        </footer>
</div>
    </body>
</html>
<!--"images/" . $imageFileName-->
