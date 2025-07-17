<?php

$tools=[ "VS Code" , " Git" , " GitHub" , " Figma " , " Postman"];
$search=" Git" ;

 echo "Total Counts : " . count($tools) . "<br>";

if (in_array($search, $tools))
     {
        echo" $search in the list <br>";
     }

     echo "All Tools : ";
     
      print_r(array_values($tools)) ;
     echo "<br>";

       
    
     
    

