<?php
$num = 0;
$consecutive1 = 2;
$consecutive2 = 3;
$consecutive3 = 4;
$opperation = 1;
$first = 0;
$final = 0;
$t = 0;

while($t < 10){

if($first == 0){

$final = 3 + 4/($consecutive1 * consecutive2 * consecutive3);

$consecutive1 = $consecutive3;
$consecutive2 = $consecutive1 + 1;
$consecutive3 = $consecutive2 + 1;

$first = 1;
$t++;
}

if($first == 1){

if(opperation == 0){

if($first == 0){

$final = $final + 4/($consecutive1 * consecutive2 * consecutive3);

$consecutive1 = $consecutive3;
$consecutive2 = $consecutive1 + 1;
$consecutive3 = $consecutive2 + 1;

$t++;
}

}elseif(opperation == 1){

if($first == 0){

$final = $final - 4/($consecutive1 * consecutive2 * consecutive3);

$consecutive1 = $consecutive3;
$consecutive2 = $consecutive1 + 1;
$consecutive3 = $consecutive2 + 1;

$t++;
}

}else{

echo "Error!";

}

}

}
echo $final;
?>
