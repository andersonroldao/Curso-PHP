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
            $cotacao = 5.05;
            $real = $_GET["numero"];
            if (empty($real)) {
                $real = 0;
            }
            //$real = str_replace(',','.', $real);
            $dolar = $real / $cotacao;

            //Number Format
            /* $dolar = number_format($dolar, 2,',',".");
            $real = number_format($real, 2,',',".");

            echo "Seus R$ $real, equivalem a US$ $dolar*<br>"; */

            //Biblioteca intl (Internalization)
            $moeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<h2>Seus " . numfmt_format_currency($moeda, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($moeda, $dolar, "USD") . "</strong>*</h2>";
        ?>

        <p id="nota">*Cotação fixa no valor de R$ 5,05.</p>

        <input type="button" value="Voltar" id="enviar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>