<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP</title>
</head>
<body>
    <h1>Você está na página PHP!</h1>

    <p>
        <a href="index.html">Voltar para o início</a>
    </p>
    
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        echo "Hoje é " . date("d/m/Y") . " e agora são " . date("H:i:s");
    ?>


</body>
</html>