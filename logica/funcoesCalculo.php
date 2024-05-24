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
?>