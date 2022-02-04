<?php 

function dump_arr(array $array): void{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function dd_arr(array $array): void{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    die();
}