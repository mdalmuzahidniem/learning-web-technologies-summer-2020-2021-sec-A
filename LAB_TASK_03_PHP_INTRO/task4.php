<?php
      $num1=100;
      $num2=55;
      $num3=25;
	  echo "Given numbers are: </br>".$num1."</br>".$num2."</br>".$num3."<br> largest number is: ";
      
	  if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
?>