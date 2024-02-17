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
        $tempo = $_GET['tempo'] ?? 0;

        $anos = $tempo / (60 * 24 * 365.25);
        $meses = $tempo / (60 * 24 * 30.44);
        $semanas = $tempo / (60 * 24 * 7);
        $dias = $tempo / (60 * 24);
        $horas = $tempo / 60;
        $segundos = $tempo * 60;
        $milisegundos = $tempo / 60000;
    ?>

    <main>
        <h1>Calculo de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="time">Digite o tempo que quer calcular (em minutos)</label>    
            <input type="number" name="tempo" value="<?=$tempo?>" required>
            <input type="submit" value="Calcular">
    </form>
    </main>
    <section>
        <h2>Aqui esta o resultado</h2>
        <p>O <?=$tempo?> em anos é <?=$anos?> anos</p>
        <p>O <?=$tempo?> em meses é <?= $meses?> meses</p>
        <p>O <?=$tempo?> em semanas é <?=$semanas?> semanas</p>
        <p>O <?=$tempo?> em dias é <?=$dias?> dias</p>
        <p>O <?=$tempo?> em horas é <?=$horas?> horas</p>
        <p>O <?=$tempo?> em segundos é <?=$segundos?> segundos</p>
        <p>O <?=$tempo?> em milisegundos é <?= $milisegundos?> milisegundos</p>
    </section>
</body>

</html>