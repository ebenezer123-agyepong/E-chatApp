<?php
//function printMyName($name){
    echo "My name is: $name";
//}

//$name = readline("What is your name? ");
//printMyName($name);

function sortNumbers($num1, $num2, $num3){
    if($num1 > $num2){
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }
    if($num1 > $num3){
        $temp = $num2;
        $num2 = $num3;
        $num3 = $temp;
    }
    if($num1 > $num2){
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }
    return array($num1, $num2, $num3);
}

$sortedNumbers = sortNumbers(55, 2, 89);
print_r($sortedNumbers);