<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>cotação</h1>
    </header>
    <main>
        <?php
        $cotacao = 5.17;
        $real = $_GET["number"];

        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);


        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <a href="javascript:history.go(-1)">voltar</a>
    </main>
</body>

</html