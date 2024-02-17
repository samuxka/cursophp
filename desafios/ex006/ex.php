<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Anatomia Divisão</h1>
        <form action="" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="dividendo" placeholder="Dividendo">
            <label for="d2">Divisor</label>
            <input type="number" name="divisor" placeholder="Divisor">
            <input type="submit" value="Analisar">
        </form>
        <section>
            <h2>Estrutura da divisão</h2>
        </section>
        <?php
            $dividendo = $_GET["dividendo"];
            $divisor = $_GET["divisor"];

            $quociente = (int) ($dividendo / $divisor);
            $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </main>
</body>
</body>

</html>