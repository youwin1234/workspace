<?php
function select ($query) {
     //Connect to the database 
    $host = "127.0.0.1";
    $user = "yshepta";              //Your Cloud 9 username
    $pass = "";                     //Remember, there is NO password by default!
    $db = "positions";                  //Your database name you want to connect to
    $port = 3306;                   // The port #. It is always 3306
    
    $conn = mysqli_connect($host, $user, $pass, $db, $port) or die(  mysql_error()  );
    
    $result = mysqli_query($conn, $query);
    $conn->close();  //close connection to db
    
    return $result;
}



/**
  * selects all picture tags and id's from database and displays tags and id's on page along with a delete option
  * 
  * @author  Mike van Riel <me@mikevanriel.com>
  *
*/
function getTags() {
    $sql = "SELECT * FROM `positions` LIMIT 0, 30 ";
    $result = select($sql);
    
   
    
    $db_tags = array();
    $db_id = array();
        
        
     while (   $row = mysqli_fetch_assoc($result)   ) 
    {
        $db_tags[]  =  $row['tag'];
        $db_id[] = $row['id'];
    }
    
    for ($i=0;$i<count($db_id);$i++) 
    {
        echo($db_tags[$i]);
        echo(" <a href='delete.php?id=$db_id[$i]' >&nbsp;Delete</a>");
        echo('<br>');
    }
    
}

/**
  * selects all picture tags and id's from database and displays tags and id's on page along with a delete option
  * 
  * @author  Mike van Riel <me@mikevanriel.com>
  *
*/
function findTags($searchTerm) {
    $sql = "SELECT * FROM positions WHERE tag LIKE '%$searchTerm%'";
    $result = select($sql);
    
   
    
    $db_tags = array();
    $db_id = array();
        
        
     while (   $row = mysqli_fetch_assoc($result)   ) 
    {
        $db_tags[]  =  $row['tag'];
        $db_id[] = $row['id'];
    }
    
    $imageIds = array();
    
    for ($i=0;$i<count($db_id);$i++) 
    {
       /* echo($db_tags[$i]);
        echo(" <a href='delete.php?id=$db_id[$i]' >&nbsp;Delete</a>");
        echo('<br>'); 
        echo(getImageIdWithPosition($db_id[$i])); */
        $imageIds[] = getImageIdWithPosition($db_id[$i]);
    }
    return $imageIds;
}


function getImageIdWithPosition($positionId) {
    
    $sql = "SELECT * FROM tagged WHERE positions_id = $positionId";
     $result = select($sql);
    $imageId;
     while (   $row = mysqli_fetch_assoc($result)   ) 
    {
        $imageId = $row['saved_images_id'];
    }
    return $imageId;
}


function getImageTagIds($imageId)
{
    $sql = "SELECT * FROM tagged WHERE saved_images_id = '$imageId'";
     $result = select($sql);
    $positions_ids = array();
     while (   $row = mysqli_fetch_assoc($result)   ) 
    {
        $positions_ids[] = $row['positions_id'];
    }
    return $positions_ids;
}




function makePositions($imageId){
   
   $imageTagIds = getImageTagIds($imageId);
   
   if (count($imageTagIds) == 0)
   {
       //leave empty because array is empty
       echo("empty positions");
   }
   else {
                  //loop through and get ids for custom sql
        $imageTagIdsCount = count($imageTagIds);
  
        
        for ($i =0; $i < $imageTagIdsCount; $i++)
          {
              if($i + 1 <$imageTagIdsCount) {
                $string = $string ." id=".$imageTagIds[$i]." OR";
              
              }
              else {
                $string = $string ." id=".$imageTagIds[$i];  
              }
          }
           
                $sql = "SELECT *  FROM positions WHERE ". $string;
        
            $result = select($sql);
            
             while (   $row = mysqli_fetch_assoc($result)   ) 
            {
                $db_x1[] = $row['x1'];
                $db_y1[] = $row['y1'];
                $db_x2[] = $row['x2'];
                $db_y2[] = $row['y2'];
                //$db_fx[] = $db_x1[]-$db_x2;
                //$db_fy[] = $db_y1[]-$db_y2;
                $db_id[] = $row['id'];
                $db_tags[]  =  $row['tag'];
            }
            //CSS TAG PRINTER WITH ID
            for($x=0;$x<count($db_tags);$x++){
                $custom_Width = $db_x2[$x] - $db_x1[$x];
                $custom_Width= $custom_Width.'px';
                $custom_Height = $db_y2[$x] - $db_y1[$x];
                $custom_Height= $custom_Height.'px';
                
                $cssTag = "#tag$db_id[$x]{
                          position:absolute;
                          top:$db_y1[$x]px;
                          left:$db_x1[$x]px;
                          width: $custom_Width;
                          height: $custom_Height;
                          border-width: 1px;
                          border: solid;
                          border-color: black;
                      }" ;
                echo($cssTag);
                }
   }
}






//hover over tags

function makeJqueryTagChoiceHover($imageId)
{
    



       $imageTagIds = getImageTagIds($imageId);
       
       if (count($imageTagIds) == 0)
           {
               //leave empty because array is empty
               echo("empty tag choice");
           }
       else {
            //loop through and get ids for custom sql
            $imageTagIdsCount = count($imageTagIds);
      
            
            for ($i =0; $i < $imageTagIdsCount; $i++)
              {
                  if($i + 1 <$imageTagIdsCount) {
                    $string = $string ." id=".$imageTagIds[$i]." OR";
                  
                  }
                  else {
                    $string = $string ." id=".$imageTagIds[$i];  
                  }
              }
               
                    $sql = "SELECT *  FROM positions WHERE ". $string;
            
                $result = select($sql);
                
       $db_tags = array();
        $db_id = array();
            
            
         while (   $row = mysqli_fetch_assoc($result)   ) 
        {
            $db_tags[]  =  $row['tag'];
            $db_id[] = $row['id'];
        }
        
        for ($i=0;$i<count($db_id);$i++) 
        {

            $hoverjquery=   "$(document).ready(function(){
                                $('#tagchoice$db_id[$i]').mouseover(function(){
                                    $('#tag$db_id[$i]').css('background-color', 'yellow', 'opacity', '0.1', 'filter', 'alpha(opacity=10)');
                                });
                                $('#tagchoice$db_id[$i]').mouseout(function(){
                                    $('#tag$db_id[$i]').css('background-color', '');
                                });
                            });";
            echo ($hoverjquery);
        
        }
         for ($i=0;$i<count($db_id);$i++){ 
        $hideTagsButton = 
        "//hide button toggle
$(document).ready(function() {
    $('button').click(function() {
        $('#tag$db_id[$i]').toggle();
        });
    });";  echo($hideTagsButton);    }
       }
}



function makeImageTags($imageId){
   
       $imageTagIds = getImageTagIds($imageId);
       
       if (count($imageTagIds) == 0)
           {
               //leave empty because array is empty
               echo("empty image tags");
           }
       else {
                      //loop through and get ids for custom sql
            $imageTagIdsCount = count($imageTagIds);
      
            
            for ($i =0; $i < $imageTagIdsCount; $i++)
              {
                  if($i + 1 <$imageTagIdsCount) {
                    $string = $string ." id=".$imageTagIds[$i]." OR";
                  
                  }
                  else {
                    $string = $string ." id=".$imageTagIds[$i];  
                  }
              }
               
                    $sql = "SELECT *  FROM positions WHERE ". $string;
            
                $result = select($sql);
                
       $db_tags = array();
        $db_id = array();
            
            
         while (   $row = mysqli_fetch_assoc($result)   ) 
        {
            $db_tags[]  =  $row['tag'];
            $db_id[] = $row['id'];
        }
        
        for ($i=0;$i<count($db_id);$i++) 
        {
            echo("<label id='tagchoice$db_id[$i]'>");
            
            echo($db_tags[$i]);
            echo("</label>");
                    // HOVER FOR TAGS BENEATH PICTURE
          /*?  for($x=0;$x<count($db_tags);$x++){
               $cssTag = "#tag$db_id[$x]:hover{
                          border-color: yellow;
                          color: black;
                          background-color: #aaaaaa;
                          border-width: 1px;
                          border: solid;
                        }" ;
                        
        */
            echo(" <a href='delete.php?id=$db_id[$i]&image_id=$imageId'>&nbsp;Delete</a>");
            echo('<br>');
        }
       }
}



function makeTagsandIDs(){
    $sql = "SELECT * FROM `positions` LIMIT 0, 30 ";
    $result = select($sql);
    
     while (   $row = mysqli_fetch_assoc($result)   ) 
    {
        $db_tags[]  =  $row['tag'];
        $db_id[] = $row['id'];
       
    }
    for($x=0;$x<count($db_tags);$x++){
         $tagsandIDs = "<label id='tag$db_id[$x]'>$db_tags[$x]</label>";
       echo($tagsandIDs);
        }

}





function makeTagsandIDsForImage($imageId){
   
       $imageTagIds = getImageTagIds($imageId);
       
       if (count($imageTagIds) == 0)
           {
                   //leave empty because array is empty
                   echo("empty tag and id");
           }
       else {
                      //loop through and get ids for custom sql
                    $imageTagIdsCount = count($imageTagIds);
                    
                    
                    for ($i =0; $i < $imageTagIdsCount; $i++)
                    {
                        if($i + 1 <$imageTagIdsCount) {
                        $string = $string ." id=".$imageTagIds[$i]." OR";
                    }
                    else 
                    {
                        $string = $string ." id=".$imageTagIds[$i];  
                    }
                    }
                    
                    $sql = "SELECT *  FROM positions WHERE ". $string;
                    $result = select($sql);
                    
                    $db_tags = array();
                    $db_id = array();
                    
                    while (   $row = mysqli_fetch_assoc($result)   ) 
                    {
                        $db_tags[]  =  $row['tag'];
                        $db_id[] = $row['id'];
                    
                    }
                    for($x=0;$x<count($db_tags);$x++)
                    {
                        $tagsandIDs = "<label id='tag$db_id[$x]'>$db_tags[$x]</label>";
                        echo($tagsandIDs);
                    }
       
        }
}










/**
  * Creates an array that stores all of the current tags in the database for later use.
  * 
  * @author  Mike van Riel <me@mikevanriel.com>
  *
*/
function getTagsArray() {
    $sql = "SELECT * FROM `positions` LIMIT 0, 30 ";
    $result = select($sql);
    
    $db_tags = array();
      
        
    
     while (   $row = mysqli_fetch_assoc($result)   ) 
    {
        $db_tags[]  =  $row['tag'];
        
    }
    
    return $db_tags;
}



/**
  * Looks for the id of the tag and then finds the tag based off of id in the database and deletes tag and all related things.
  * 
  * @author  Mike van Riel <me@mikevanriel.com>
  *
*/
function delete ($tagId){
    $sql = "DELETE FROM positions.positions WHERE positions.id = '$tagId'";
    $result = select($sql);
}






function getImageFileName($imageId)
{
    
    $sql = "SELECT * FROM saved_images WHERE id = $imageId";
    $result = select($sql);
    
    while (   $row = mysqli_fetch_assoc($result)   ) 
    {
        $db_path[] = $row['image'];
    }
    
    return $db_path[0];
    
}



function getAllImages($imageTagIds)
{
        
        
        $imagePath = 'images/';
        
         $host = "127.0.0.1";
            $user = "yshepta";              //Your Cloud 9 username
            $pass = "";                     //Remember, there is NO password by default!
            $db = "positions";                  //Your database name you want to connect to
            $port = 3306;      
        
        // Create connection
        $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
        
        $query = "";
        
        
  if (count($imageTagIds) == 0)
   {
       //leave empty because array is empty
       $query = "SELECT *  FROM saved_images ";
       echo("Here are all images on the server:");
       echo("<br>");
    }
   else {
        //echo("specific images....");
       
                  //loop through and get ids for custom sql
        $imageTagIdsCount = count($imageTagIds);
       // echo("$$$$$$".$imageTagIdsCount);
        
        for ($i =0; $i < $imageTagIdsCount; $i++)
          {
              if($i + 1 <$imageTagIdsCount) {
                $string = $string ." id=".$imageTagIds[$i]." OR";
              
              }
              else {
                $string = $string ." id=".$imageTagIds[$i];  
              }
          }
           
                $query = "SELECT *  FROM saved_images WHERE ". $string;
        
           //$result = select($sql);
            
   }
        
        
        
      $result = mysqli_query($connection, $query);
        
        
        //copy data from the DB
        $positions = array();
        $db_id = array();
        
        while ($row = mysqli_fetch_assoc($result)) {
            $db_filename[] = $row['image'];
            $db_id[] = $row['id'];
        };
        
        
        /*
         for ($i=0; $i<count($db_id); $i++) 
            {
                
                echo("<a href='https://imagescan-yshepta.c9users.io/tagImage.php?image_id=$db_id[$i]' >");
                echo("<img src='images/$db_filename[$i]'>");
                echo("</a>");
                
                echo("<a href='db_functions.php?id=$db_id[$i]' > Delete </a>");
                echo('<br>');
            }
        */
        
        echo '<div id="nanoGallery">';
         for ($i=0; $i<count($db_id); $i++) 
         {
               echo "<a href='$db_filename[$i]' data-ngthumb='$db_filename[$i]'  data-ngdesc='Description1' data-ngdest='https://imagescan-yshepta.c9users.io/tagImage.php?image_id=$db_id[$i]'>Title Image1</a>";
         }
         echo '</div>';//test
            
        $connection->close();  //close connection to db



    
}






function deleteImage ($recordId)
{
    //Connect to the database 
    $host = "127.0.0.1";
    $user = "yshepta";              //Your Cloud 9 username
    $pass = "";                     //Remember, there is NO password by default!
    $db = "positions";                  //Your database name you want to connect to
    $port = 3306; 
    
    $conn = mysqli_connect($host, $user, $pass, $db, $port) or die(  mysql_error()  );
    
    
    $sql = "DELETE FROM saved_images WHERE saved_images.id = '$recordId'";
    $result = mysqli_query($conn, $sql);
    
    deleteImageTags($recordId);
}
function deletePosition($positionId)
{
    //Connect to the database 
    $host = "127.0.0.1";
    $user = "yshepta";              //Your Cloud 9 username
    $pass = "";                     //Remember, there is NO password by default!
    $db = "positions";                  //Your database name you want to connect to
    $port = 3306; 
    
    $conn = mysqli_connect($host, $user, $pass, $db, $port) or die(  mysql_error()  );
    
    
    $sql = "DELETE FROM positions WHERE id = '$positionId'";
    $result = mysqli_query($conn, $sql);
    
}
function deleteTagged($imageID)
{
    //Connect to the database 
    $host = "127.0.0.1";
    $user = "yshepta";              //Your Cloud 9 username
    $pass = "";                     //Remember, there is NO password by default!
    $db = "positions";                  //Your database name you want to connect to
    $port = 3306; 
    
    $conn = mysqli_connect($host, $user, $pass, $db, $port) or die(  mysql_error()  );
    
    
    $sql = "DELETE FROM tagged WHERE saved_images_id = '$imageID'";
    $result = mysqli_query($conn, $sql);
    
}

function deleteImageTags($imageID)
{
 $tagId = getImageTagIds($imageID);
   foreach($tagId as $tags){
       deletePosition($tags);
       }
   deleteTagged($imageID);
  }


?>