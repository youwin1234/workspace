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
<link rel="stylesheet" type="text/css" href="Submit.css"/>
<link href='https://fonts.googleapis.com/css?family=Lobster|Noto+Serif' rel='stylesheet' type='text/css'>
         
         
        <title>Image Uploaded</title>
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

$imagePath = 'images/';


 $host = "127.0.0.1";
    $user = "yshepta";              //Your Cloud 9 username
    $pass = "";                     //Remember, there is NO password by default!
    $db = "positions";                  //Your database name you want to connect to
    $port = 3306;      

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error)
{
    die("Connectin failed: " . $conn-> connect_error);
}


 if (isset($_POST["Upload_Image"])){  
   
    $file_name = $_FILES["myimage"]['name'];
    echo "<br>"; 
    
    
    $file_type = $_FILES["myimage"]['type'];
    $file_size = $_FILES["myimage"]['size'];
    $file_tmp_name = $_FILES["myimage"]['tmp_name'];
    
    
    
    ?>
    
    
    <img src='<?php echo $imagePath.$file_name; ?>' width='1000'>
    
    
    <form  action="rotation.php" method="GET" >  
        <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">
        Degrees:
        <input type="integer" name="degrees"  ><br>
        <input type="submit"  value="submit"  >
        
</form>
    
    
    <?php

    $result = move_uploaded_file($file_tmp_name, $imagePath.$file_name);
    if($result)
    {
        echo "Your image is done uploading. If you wish to change the degree of the image please type in new degree and click submit." ."<br>". "If not just continue to the Library of Images to view your newly submitted image.";
        echo "<br>";
    }
    
}



$sql = "INSERT INTO saved_images(image) VALUES ('$file_name');";



if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully ";
    echo "<a href='dbimages.php'>Library of Images </a>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

<!--------------------until here------------------->               
        </div>
</div>
<footer>
              <div class="footer1">
                     <p id="foot">Last Motified:08/08/2016 &copy;LakeView Students</p>
                     </div>
               
        </footer>
    </body>
</html>
<!--"images/" . $imageFileName-->




