<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="logica/processamentoConversor.php">
            <label for="valor">Digite um valor de medida em comprimentos:</label>
            <input type="text" name="valor" id="valor" placeholder="Digite o valor">
            
            <select name="conversao" id="conversao">
                <option value="cmToM">Centímetros para Metros</option>
                <option value="mToCm">Metros para Centímetros</option>
                <option value="mToKm">Metros para Quilômetros</option>
                <option value="kmToM">Quilômetros para Metros</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
            
            
        </form>
        <h1 id="resultado">
            <?php
                //Verificando se existe a variavel de session resultado
                if(isset($_SESSION['resultado'])){
                    //Caso exista, utiliza um echo para exibir o resultado
                    echo $_SESSION['resultado'];
                }
            ?>
        </h1>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>