<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        
        <?php 
        $valor = $_GET['valor'] ?? 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>" step="5">

            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
        // $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<h2>Saque de R$".number_format($valor , 2 , ",",".")." realizado com sucesso!</h2>";
        $cem = intdiv($valor, 100);
        $rcem = $valor%100;
        $cinquenta = intdiv($rcem, 50);
        $rcinquenta = $rcem%50;
        $dez = intdiv($rcinquenta, 10);
        $rdez = $rcinquenta%10;
        $cinco = intdiv($rdez, 5);
        echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src='100.jpg' alt='Cédula de 100 reais' width=40%> x$cem</li>
                <li><img src='50.jpg' alt='Cédula de 50 reais' width=40%> x$cinquenta</li>
                <li><img src='10.jpg' alt='Cédula de 10 reais' width=40%> x$dez</li>
                <li><img src='5.jpg' alt='Cédula de 5 reais' width=40%> x$cinco</li>
            </ul>"
        ?>
    </section>

</body>
</html>