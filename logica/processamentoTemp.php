<?php

require_once "funcoesCalculo.php"; // Verifique se o caminho está correto

session_start();

if(isset($_POST['temperatura']) && isset($_POST['conversao'])) {
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
