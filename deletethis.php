<?php
$imageTagIds = array (1,0,2);
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
          echo($string);
    
  
?>