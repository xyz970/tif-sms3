<?php
function BilPrima($val){
    if ($val % 2 == 1 || $val == 2) {
        echo "Bilangan Prima";
    }
}

function BilGenap($val){
    if ($val % 2 == 0) {
        echo "Bilangan Genap";
    }
}
function BilGanjil($val){
    if ($val % 2 == 1) {
        echo "Bilangan Ganjil";
    }
}

function lebihDari($arr){
    $last = array_key_last($arr);
    $lastVal = $arr[$last];
    echo "Angka Lebih >= ".$lastVal;
}

function kelipatan($val){
    if ($val % 10  == 0) {
        echo "angka Kelipatan 10";
    }
}

kelipatan(8);