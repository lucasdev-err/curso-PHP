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
    $sMin = 1380;
    $sal = $_GET['salario'] ?? $sMin;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario" step="0,01" value="<?= $sal ?>">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>


    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $quantSMin = intdiv($sal, $sMin);
        $resto = $sal % $sMin;
        // $currency = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Quem recebe um salário de " . number_format("$sal","2",",",".") . " ganha <strong>$quantSMin salários mínimos</strong> + R$" . number_format("$resto", "2", ",",".") . ".</p>"


        // echo "<p>Quem recebe um salário de " . numfmt_format_currency($currency, $sal, "BRL") . " ganha <strong>$quantSMin salários mínimos</strong> + " . numfmt_format_currency($currency, $resto, "BRL") . ".</p>"
        ?>
    </section>
</body>

</html>