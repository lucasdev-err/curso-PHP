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
        <h1>Conversor de Moedas v1.0</h1>

        <?php 
            
            $real = $_GET["num"];
            $cot = 4.91;
            $sum = $real / $cot;
            echo "<p>Seus R$". number_format($real , 2 , "," , ".") ." equivalem a <strong>US$" . number_format($sum , 2 , "," , ".") . "</strong></p>";
            // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") ." equivalem a ". numfmt_format_currency($padrao, $sum, "USD") ."</p>"
        ?>

        <p>*<strong>Cotação fixa de R$4,91</strong> informada diretamente no código.</p>
    </main>
</body>

</html>