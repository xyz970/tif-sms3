<?php

function selectionSort(&$array)
{
    $n = sizeof($array);
    for ($i=1; $i < $n; $i++) { 
        
        $key = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
        $array[$j+1] = $key;
    }
    
}
$array = array(2,6,10,8,5,4);
selectionSort($array);
for ($i=1; $i < sizeof($array); $i++) { 
    echo $array[$i]." ";
    // echo "\n";
}