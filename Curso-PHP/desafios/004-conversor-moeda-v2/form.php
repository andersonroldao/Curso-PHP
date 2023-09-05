<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas V.1</title>
</head>
<body>
    <header>
        <h1>Conversor de Real (BRL) para Dollar (USD)</h1>
    </header>

    <main>
        <?php

            $dataInicial = date("m-d-Y", strtotime("-7 days"));
            $dataFinal = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataInicial . '\'&@dataFinalCotacao=\'' . $dataFinal . '\'&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $real = $_GET["numero"];
            if (empty($real)) {
                $real = 0;
            }
            $dolar = $real / $cotacao;
            //Biblioteca intl (Internalization)
            $moeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<h2>Seus " . numfmt_format_currency($moeda, $real, "BRL") . " equivalem a </h2><h2><strong>" . numfmt_format_currency($moeda, $dolar, "USD") . "</strong>*</h2>";

            echo "<input type=\"button\" value=\"Voltar\" id=\"enviar\" onclick=\"javascript:history.go(-1)\"><br>";

            echo "<p class=\"nota\">*Cotação obtida através do <a href=\"https://www.bcb.gov.br/estabilidadefinanceira/fechamentodolar\" target=\"_blank\">Banco Central do Brasil</a> no valor de <strong>$cotacao</strong>.</p>";
        ?>

        <p class="nota">*Para dias não úteis, assume-se a cotação do dia útil imediatamente anterior.</p>        
    </main>
</body>
</html>