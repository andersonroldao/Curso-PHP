<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <header>
        <h1>Conversor de Real (BRL) para Dollar (USD)</h1>
    </header>

    <main>
        <?php
            $real = $_GET["numero"];
            $real = str_replace(',','.', $real);
            $dolar = $real * 5.05;
            $real = str_replace('.',',', $real);
            $dolar = str_replace('.',',', $dolar);
            echo "Seus R$ $real, equivalem a US$ $dolar*<br>";
        ?>

        <p>*Cotação fixa no valor de R$ 5,05.</p>

        <input type="button" value="Voltar" id="enviar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>