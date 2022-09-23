<?php

function compare($int1, $int2){
    if ($int1 >= $int2) {
        echo $int1;
    }
}

function getDetailDate(){
    return date('d-m-Y');
}

function getCustomDate(){
    return date('d-F-Y');
}

echo getCustomDate();

