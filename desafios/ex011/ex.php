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
        $valor = $_GET['preco'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 50;

        $porcentagem = ($valor * $reajuste) / 100;

        $calc = $valor + $porcentagem
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="valor">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>" required>
            <label for="valor">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Preço reajustado</h2>
        <p>O produto que custava R$<?=$valor?>, com <strong><?=$reajuste?>% de almento</strong> vai passar a custar R$<?=$calc?> a partir de agora</p>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = reajuste.value
        }
    </script>
</body>

</html>