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
        <h1>Valores</h1>
    </header>

    <main>
        <?php 
            $n = $_GET["numero"];
            $ant = $n - 1;
            $suc = $n + 1;
        ?>

        <p>Valor anterior: <?php echo $n-1; ?></p>
        <p>Valor fornecido: <?php echo $n; ?></p>
        <p>Próximo sucessor: <?php echo $n+1; ?></p>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>
