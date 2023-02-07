<?php
$name = "James Smith";
//echo var_dump($name);
echo $name. "<br>";

$number = 5;
echo $number . "is your number" . "<br>";

//constants in Php
#define("PI", 3.142);
#echo PI;

#loops

#array
$name = ["James", "John"];
echo "Before => Number of elements in name: " . count($name) . "\n";

array_push($name,"Eben", "Mary");
echo "After => Number of elements in name: " . count($name) . "\n";

echo array_pop($name);
echo "After pop was called => size: " . count($name) . "\n";

//associative
$person = [
    "firstName" => "James",
    "secondName" => "smith",
    "age" => 18
];



//$numbers = array(2, 3, 4, 5);
//foreach($numbers as $number){
   # echo "$number\n";
//}

#echo "\n\n";

#foreach($person as $key => $value) {
   # echo "$value\n";
#}

//multi dim array
$numbers = [
    [2, 3, 4, 5, 6, 7],
    [11, 8, 10, 9, 7]
];

for($i=0; $i < 2; $i++){
    for($j = 0; $j < 5; $j++ ){
        echo $numbers[$i][$j] . "\t";
    }
    echo "\n";
}





