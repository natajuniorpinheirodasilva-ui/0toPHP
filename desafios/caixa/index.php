<?php
$num = isset($_GET["num"]) && $_GET["num"] ? $_GET["num"] : 0;
$saque = $num
    ? [
        "100" => intdiv($num, 100),
        "50" => intdiv($num % 100, 50),
        "20" => intdiv($num % 50, 20),
        "10" => intdiv($num % 20, 10)
    ]
    : null;
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
        <h1>Caixa eletrônico</h1>
    </header>

    <main>
        <form
            action="<?= $_SERVER['PHP_SELF'] ?>"
            method="get">
            <p>Notas disponíveis: R$100, R$50, R$20, R$10</p>

            <label for="num">Forneça o valor do saque</label>
            <input type="number" name="num" id="idnum" value="<?= $num ?>" />

            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php if ($saque): ?>
        <section>
            <h2>Notas entregues:</h2>
            <ul>
                <?php foreach ($saque as $nota => $quantidade): ?>
                    <?php if ($quantidade > 0): ?>
                        <li><?= $quantidade ?> nota(s) de R$<?= $nota ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>
</body>

</html>