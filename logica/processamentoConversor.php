<?php

session_start();
require_once "funcoesCalculo.php";

if(!empty($_GET['valor']) && !empty($_GET['conversao'])) {
    $valor = floatval($_GET['valor']);
    $conversao = $_GET['conversao'];
    
    if($conversao === "cmToM") {
        $resultado = "{$valor} cm = " . cmToM($valor) . " m";
    } elseif($conversao === "mToCm") {
        $resultado = "{$valor} m = " . mToCm($valor) . " cm";
    } elseif($conversao === "mToKm") {
        $resultado = "{$valor} m = " . mToKm($valor) . " km";
    } elseif($conversao === "kmToM") {
        $resultado = "{$valor} km = " . kmToM($valor) . " m";
    }

    $_SESSION['resultado'] = $resultado;
    header('Location: ../conversor.php');
    exit();
}

?>
