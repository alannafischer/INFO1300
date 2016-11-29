<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
*
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = []; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3

function make_randoms($number_array) { 
    for ($i=0; $i<10; $i++) {
        $temp_num = rand(1,5);
        array_push($number_array,$temp_num);
    }
    for ($j=0; $j<count($number_array); $j++)
        echo "<br>$number_array[$j]</br>"; 
    }

function get_and_sort($number_array, $high_array){
        $number_array= make_randoms($number_array);
    for ($k=0; $k<count($number_array); $k++){
         if ($number_array[$k] >3){ 
            echo "<br>$number_array[$k]</br>";
         }
        
    }
        
}
       

get_and_sort($number_array, $high_array);

?>