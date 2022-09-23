<?php

$array1 = [1,2,3,5,9,8];
$array2 = [0,5,3,2,7,9];
echo "Intersect = ";
print_r(array_intersect($array1,$array2));
echo "<br> Difference = ";
print_r(array_diff($array1,$array2));