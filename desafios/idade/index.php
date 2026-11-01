<?php 
    $anoNascimento = isset($_GET["anoNascimento"]) && $_GET["anoNascimento"] != "" ? (int)$_GET["anoNascimento"] : 0;
    $mesNascimento = isset($_GET["mesNascimento"]) && $_GET["mesNascimento"] != "" ? (int)$_GET["mesNascimento"] : 1;
    
    $ano = isset($_GET["ano"]) && $_GET["ano"] != "" ? (int)$_GET["ano"] : (int)date("Y");
    $mes = isset($_GET["mes"]) && $_GET["mes"] != "" ? (int)$_GET["mes"] : (int)date("m");

    $idadeAnos = 0;
    $idadeMeses = 0;

    if ($anoNascimento > 0) {
        if ($mes >= $mesNascimento) {
            $idadeAnos = $ano - $anoNascimento;
            $idadeMeses = $mes - $mesNascimento;
        } else {
            $idadeAnos = ($ano - $anoNascimento) - 1;
            $idadeMeses = 12 - ($mesNascimento - $mes);
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Cálculo de Idade</h1>
    </header>
    
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="anoNascimento">Ano de nascimento</label>
            <input type="number" name="anoNascimento" id="idanoNascimento" min="1900" max="<?= date('Y') ?>" value="<?=$anoNascimento?>">

            <label for="mesNascimento">Mês de nascimento</label>
            <input type="number" name="mesNascimento" id="idmesNascimento" min="1" max="12" value="<?=$mesNascimento?>">

            <label for="ano">Qual ano você deseja calcular a idade? (Estamos em <?=date("Y")?>)</label>
            <input type="number" name="ano" id="idano" value="<?=$ano?>">

            <label for="mes">Mês de referência (1 a 12)</label>
            <input type="number" name="mes" id="idmes" min="1" max="12" value="<?=$mes?>">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>

        <?php if ($anoNascimento > 0): ?>
            <p>
                Em <strong><?= str_pad($mes, 2, "0", STR_PAD_LEFT) ?>/<?= $ano ?></strong> você terá 
                <strong><?= $idadeAnos ?> <?= $idadeAnos == 1 ? "ano" : "anos" ?></strong><?php 
                    if ($idadeMeses > 0) {
                        echo " e <strong>$idadeMeses " . ($idadeMeses == 1 ? "mês" : "meses") . "</strong>";
                    }
                ?>.
            </p>
        <?php else: ?>
            <p>Preencha os campos para calcular a idade.</p>
        <?php endif; ?>
    </section>
</body>
</html>