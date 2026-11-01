<?php 
    $texto = isset($_GET["texto"]) ? trim($_GET["texto"]) : "";
    $count = strlen($texto);
    $mai = strtoupper($texto);
    $min = strtolower($texto);
    $inv = strrev($texto);
    $palavras = str_word_count($texto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Análise de Texto</h1>
    </header>
    
    <main>
        <form 
            action="<?=$_SERVER['PHP_SELF']?>"
            method="get"     
        >
            <label for="texto">Forneça um texto</label>
            <input type="text" name="texto" id="idtexto" value="<?=$texto?>"/>

            <input type="submit" value="Analisar">
        </form>
    </main>

    <?php if ($texto): ?>
        <section>
            <h2>Resultado</h2>
            <ul>
                <li>Texto fornecido: <strong><?=$texto?></strong></li>
                <li>Quantidade de caracteres: <strong><?=$count?></strong></li>
                <li>Quantidade de palavras: <strong><?=$palavras?></strong></li>
                <li>Texto em maiúsculo: <strong><?=$mai?></strong></li>
                <li>Texto em minúsculo: <strong><?=$min?></strong></li>
                <li>Texto invertido: <strong><?=$inv?></strong></li>
            </ul>
        </section>
    <?php endif; ?>
        
</body>
</html>
