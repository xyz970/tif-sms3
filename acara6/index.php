<?php

$array1 = [
    ['1','1','1',],
    ['2','2','2',],
    ['3','3','3']
];

$array2 = array(
    ['3','3','3'],
    ['2','2','2'],
    ['1','1','1'],
);

for ($i=0; $i < count($array1); $i++) { 
    for ($j=0; $j < count($array2); $j++) { 
       echo $array1[$i][$j] + $array2[$i][$j]."\n";
    }
}
