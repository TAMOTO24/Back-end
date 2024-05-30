<?php 
function fact($num){
    $value = 1;
    for($i = 1; $i <= $num; $i++)
        $value *= $i;

    return $value;
}
function sinValue($num){
    $value = sin($num);
    return $value;
}
function cosValue($num){
    return cos($num);
}
function tg($num){
    return tan($num);
}
function my_tg($num){
    return sin($num)/cos($num);
}
function powValue($x, $y) {
    return pow($x, $y);
}