<?php
session_start();
require_once "funcoesCalculo.php"; // Verifique se o caminho está correto



if(!empty($_POST['temperatura']) && !empty($_POST['conversao'])) {
    $temperatura = floatval($_POST['temperatura']);
    $conversao = $_POST['conversao'];
    
    if($conversao === "celsiusToFahrenheit") {
        $resultado = "{$temperatura} °C = " . celsiusToFahrenheit($temperatura) . " °F";
    } elseif($conversao === "fahrenheitToCelsius") {
        $resultado = "{$temperatura} °F = " . fahrenheitToCelsius($temperatura) . " °C";
    }

    $_SESSION['resultado'] = $resultado;
    header('Location: ../temperatura.php');
    exit();
}

?>
