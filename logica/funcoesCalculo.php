<?php

function adicao($num1, $num2){
    return($num1 + $num2);
}

function subtracao($num1, $num2){
    return($num1 - $num2);
}

function multiplicacao($num1, $num2){
    return($num1 * $num2);
}

function divisao($num1, $num2){
    return($num1 / $num2);
}

function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

function fahrenheitToCelsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}

function cmToM($cm) {
    return $cm / 100;
}

function mToCm($m) {
    return $m * 100;
}

function mToKm($m) {
    return $m / 1000;
}

function kmToM($km) {
    return $km * 1000;
}


?>