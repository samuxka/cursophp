<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $saque = $_GET['saque'] ?? 0;

    $resto = $saque;
    $tot100 = floor($resto / 100);
    $resto %= 100;

    $tot50 = floor($resto / 50);
    $resto %= 50;

    $tot20 = floor($resto / 20);
    $resto %= 20;

    $tot10 = floor($resto / 10);
    $resto %= 10;

    $tot5 = floor($resto / 5);
    $resto %= 5;

    $tot2 = floor($resto / 2);
    $resto %= 2;

    $tot1 = floor($resto / 1);
    $resto %= 1;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" value="<?= $saque ?>" required>
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$[??] realizado</h2>
        <p>O caixa Eletrônico vai te entregar as seguintes notas</p>
        <ul>
            <li><img src="img/100-reais.jpg"> x<?= $tot100 ?></li>
            <li><img src="img/50-reais.jpg"> x<?= $tot50 ?></li>
            <li><img src="img/20-reais.jpg"> x<?= $tot20 ?></li>
            <li><img src="img/10-reais.jpg"> x<?= $tot10 ?></li>
            <li><img src="img/5-reais.jpg"> x<?= $tot5 ?></li>
            <li><img src="img/2-reais.jpg"> x<?= $tot2 ?></li>
            <li><img src="img/1-real.jpg"> x<?= $tot1 ?></li>
        </ul>
    </section>
</body>

</html>