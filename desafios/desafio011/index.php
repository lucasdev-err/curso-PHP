<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $preco = $_GET['preco'] ?? 0;
    $perc = $_GET['perc'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0,00" value="<?= $preco ?>">

            <label for="perc">Qual será o percentual de reajuste?(<?= $perc ?>%)</label>
            <input type="number" name="perc" id="perc" max="100" min="0" value="<?= $perc ?>">

            <input type="submit" value="Reajustar">
        </form>

    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        $reajuste = $preco + ($preco * ($perc / 100));
        $cotation = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>O produto que custava " . numfmt_format_currency($cotation, $preco, "BRL") . ", com <strong>$perc% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($cotation, $reajuste, "BRL") . "</strong> a partir de agora.</p>";
        ?>
    </section>

</html>