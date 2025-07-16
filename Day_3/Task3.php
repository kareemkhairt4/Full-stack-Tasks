<?php
  
  $n1=3;
  $n2=5;
  $n3= 6;
  echo"مجموع الرقمين" . ( $n1 + $n3 ) ."<br>";
  echo "--------------------- <br>" ;
  echo "ناتج باقي القسمه". ( $n3 % $n2 ) ."<br>";
  echo "--------------------- <br>" ;

   $grade = 40;
   if (!isset($grade) )
   {
    echo "ادخل الرقم<br>";
   }
     elseif ( $grade >= 50 )
        {
            echo "ناجح<br>"; }
        else 
        {
            echo "راسب<br>";
        }    
   
echo "--------------------- <br>" ;

    echo (isset($grade)  ? ( $grade >= 50) ? "ناجح" : "راسب" : "ادخل الدرجه");
    
  ?>