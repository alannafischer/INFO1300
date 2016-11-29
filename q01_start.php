<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 1
*
*/

// variables
$i; // counter variable
$key; // holder variable for array
$value; // holder variable for array
$plain_array = array(1,2,3,"four");
$assoc_array = array("Brady"=>12, "Blount"=>29, "Garropolo"=>10);

echo "<br>loop 1:</br>"; 
for ($i=0; $i < count($plain_array); $i++){
    echo "<br>$plain_array[$i];</br>";
   }



echo "<br>loop 2:</br>"; 
foreach ($plain_array as $x){
   echo "<br>value:</br>".$x; 
}



echo "<br>loop 3:</br>"; 
foreach ($plain_array as $x){
    if (is_numeric($plain_array)) {
        echo "<br>value: "."'{$plain_array}' </br>";
    }
}



echo "<br> loop 4:</br>"; 
foreach ($assoc_array as $x=>$value){
     
     echo "<br> $x : $value</br>";
}
    
?>