<?php 
    $r = isset($_GET["real"]) ? (float)$_GET["real"] : 0;
    $cotacao = json_decode(file_get_contents('https://economia.awesomeapi.com.br/json/last/USD-BRL'), true)['USDBRL']['bid'];
    $d = $r > 0 ? ($r / $cotacao) : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css"">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <p>Você possuí: <?php printf("%.2f", $d); ?> dolares</p>

        <p><a href="javascript:history.go(-1)">Go Back</a></p>
    </main>
</body>
</html>
