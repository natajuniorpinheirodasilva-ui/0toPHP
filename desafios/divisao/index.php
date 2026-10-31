<?php 
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 1;
    $quociente = $dividendo / $divisor;
    $resto = $dividendo % $divisor;
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
        <h1>Divisão</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">   
            <label for="dividendo">Forneça o dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>">

            <label for="divisor">Forneça o divisor</label>
            <input type="number" name="divisor" id="iddivisor" value="<?=$divisor?>">

            <input type="submit" value="Enviar">
        </form> 
    </main>

    <section>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td class="linha-vertical"><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td class="linha-vertical linha-horizontal"><?=$quociente?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </section>
</body>
</html>
