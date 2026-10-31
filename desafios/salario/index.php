<?php 
    $salario = !empty($_GET['salario']) ? $_GET['salario'] : 0;
    $salarioMin = 1621;
    $qntd = intdiv((int)$salario, $salarioMin);
    $sobra = $salario - ($qntd * $salarioMin);
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
        <h1>Analisador de Salário</h1>
    </header>

    <main>
        <form 
            action="<?=$_SERVER['PHP_SELF']?>"
            method="GET"    
        >
            <label for="salario">Forneça seu Salário</label>
            <input type="number" name="salario" id="idsalario">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <p>Seu salário é: R$ <?=number_format($salario, 2, ',', '.')?> </p>
        
        <p>
            Você recebe <?=$qntd?> salário<?=$qntd > 1 ? 's' : ''?> mínimo<?=$qntd > 1 ? 's' : ''?>
            <?php if($sobra > 0): ?>
                + R$ <?=number_format($sobra, 2, ',', '.')?>
            <?php endif; ?>
        </p>
    </section>
</body>
</html>
