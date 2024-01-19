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
        <h1>Conversor de Moedas v2.0</h1>

        <?php 

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $real = $_GET["num"];
        $dolar = $real / $cotacao;
        // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        // echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") ." equivalem a <strong>". numfmt_format_currency($padrao, $dolar, "USD") ."</strong></p>";
        echo "<p>Seus R$". number_format("$real" , "2", "," , ".") ." equivalem a <strong>U$". number_format("$dolar", "2") ."</strong></p>";
        ?>

        <p>Cotação variável obtida diretamente do site do <a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUluaWNpYWwiOiIxMS0yMS0yMDIzIiwiZGF0YUZpbmFsQ290YWNhbyI6IjExLTI4LTIwMjMiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl0sInBlc3F1aXNhZG8iOnRydWUsImFjdGl2ZVRhYiI6InRhYmxlIiwiZ3JpZFN0YXRlIjp7AzADOlt7A0IDIgQwBCIsA0EDfSx7A0IDIgQxBCIsA0EDfSx7A0IDIgQyBCIsA0EDfV0sAzEDOnt9LAMyAzpbXSwDMwM6e30sAzQDOnt9LAM1Azp7fX0sInBpdm90T3B0aW9ucyI6ewNhAzp7fSwDYgM6W10sA2MDOjUwMCwDZAM6W10sA2UDOltdLANmAzpbXSwDZwM6ImtleV9hX3RvX3oiLANoAzoia2V5X2FfdG9feiIsA2kDOnt9LANqAzp7fSwDawM6ODUsA2wDOmZhbHNlLANtAzp7fSwDbgM6e30sA28DOiJDb250YWdlbSIsA3ADOiJUYWJsZSJ9fQ==" target="_blank">Banco Central do Brasil</a></p>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>