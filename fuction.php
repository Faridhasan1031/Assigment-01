<?php

function heading($tile =null,$type ='h1',$fz =null,$align ='center',$ff ='impact',$color ='#000'){


  return "<{type} style='text-align: {$align}; font-family: {$ff}; color: $color; font-size: {$fz};'> {title} </{type}";
}

  



echo  heading ('Ilove php','h1','100px');







?>