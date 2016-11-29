<?php


// variables //

$csvdata=[];
$assoc_array=[];
$print_array=[];

// functions //

//data into array

function getData(){
    $dataBlanks = [];
    $dataBlanks = array_map("str_getcsv", file("data/archery_terms.csv"));
    return $dataBlanks;
}

//array into assoc array
function creator($csvdata){
    
   foreach($csvdata as $value){
       $assoc_array[$value[0]]=$value[1];
    }
    ksort($assoc_array);
    return($assoc_array);
}

//d1 list from assoc array

function print_array($assoc_array){
    foreach(assoc_array as $key=>$value){
        echo "<dt>",$key,"</dt>";
        echo "<dd>",$value,"</dd>";
    }
}

// function calls //

$csvdata = getData();
$assoc_array = creator($csvdata);
$print_array=($assoc_array);

?>