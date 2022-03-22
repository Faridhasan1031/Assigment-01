<?php



$Amount = 500;
$type = 'dollar';


switch ($type) {
    case 'dollar':
        $rate = 85.34;
        break;
    
    case 'pound':
        $rate = 116;
        break;
case 'euro':
    $rate = 95;
    break;

case 'won':
    $rate = 28;
    break;

default :
$rate = 0;
break;






}

$usd = $amount * $rate;
echo "{$amount} dollar = {usd} USD";









?>