<?php 
    $r = $_GET["real"];
    $cotacao = 5.44;
    $d = $r / $cotacao;
    # cotação estava em 5,44 no dia.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <p>Você possuí: <?php printf("%.2f", $d); ?> dolares</p>
    </main>
</body>
</html>