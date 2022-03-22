<?php


function getbmi($wight, $height){

$bmi = $wight / ($height * $height);

if( $bmi <18.5 ){

    return "You are underwight";

}else if( $bmi >=18.5 && $bmi < 25){
    return "You are nurmal";
}else if( $bmi >=25 && $bmi < 30){

    return "You are overwight";
}else if( $bmi >= 30){
    return "You are very overwight";

}

echo getbmi(70.



















?>