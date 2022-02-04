<?php 
/**
 * Dumps an array in prettier format
 */
function dump_arr(array $array): void{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
/**
 * Dumps an array in prettier format and dies
 */
function dd_arr(array $array): void{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    die();
}