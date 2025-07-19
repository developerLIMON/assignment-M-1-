<?php
// Number Classification System//

$number =readline("Enter a number: ");


//check if it is positive or Negative//
if($number<0){
    $result1="Negative";
}elseif ($number>0){
    $result1="Positive";
}else {
    $result1="Zero";
}

//check if it is even or odd//

if($number % 2 == 0){
    $result2 ="Even";
}else {
    $result2 ="Odd";
}

//Final Output//

echo "The number is $result1 and $result2"




?>