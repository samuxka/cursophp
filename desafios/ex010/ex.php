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
        $anoNasc = $_GET['anoNasc'] ?? 0;
        $anoAtual = $_GET ['anoAtual'] ?? date("Y");

        $calc = $anoAtual - $anoNasc;
    ?>
    <main>
        <h1>Maquina do tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoN">Ano De Nascimento</label>
            <input type="number" name="anoNasc" placeholder="Ano de Nascimento" value="<?=$anoNasc?>">
            <label for="anoA">Ano Atual</label>
            <input type="number" name="anoAtual" placeholder="Ano Atual" value="<?=$anoAtual?>">
            <p>Por padrão o ano atual sera <strong><?=$anoAtual?></strong>, mas, você pode altera-lo</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Sua idade é <?=$calc?></p>
    </section>
</body>

</html>