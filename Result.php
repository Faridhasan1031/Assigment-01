<?php

$marks =700;

if($marks >=0 && $marks <=32){
echo "your grade is F";

}elseif($marks >= 33 && $marks <= 59){

    echo "your grade is C";

}elseif($marks >= 60 && $marks <= 69){

    echo "your grade is A-";
}elseif($marks >= 70 && $marks <= 79){

   echo "your grade is A"; 
}elseif($marks >= 80 && $marks <=100){

   echo "your grade is A+"; 
}else{

 echo "sorry your result is: fail";   
}

   







?>