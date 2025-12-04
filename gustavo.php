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
$agora = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html>
<body>

<h2>Hora em tempo real:</h2>
<div id="relogio"></div>

<script>
// Recebe a data do PHP
let dataInicial = new Date("<?php echo $agora; ?>");

// Atualiza a cada segundo
setInterval(() => {
    dataInicial.setSeconds(dataInicial.getSeconds() + 1);
    document.getElementById("relogio").innerHTML =
        dataInicial.toLocaleString("pt-BR");
}, 1000);
</script>

</body>
</html>


</body>
</html>