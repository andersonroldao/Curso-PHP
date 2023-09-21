<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustador de Preços</title>
</head>
<body>
    <header>
        <h1>Reajustador de Preços</h1>
    </header>

    <main>
        <?php 
            $moeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $valor = $_GET["valor"] ?? 0;
            $reajuste = $_GET["reajuste"] ?? 0;
        ?>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Preço do Produto</label>
            <input type="number" name="valor" id="idvalor" min="0" required autofocus value="<?=$valor?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><spam id="p">50</spam>%</strong>)</label>
            <input type="range" name="reajuste" id="idreajuste" min="0" max="100" value="<?$reajuste?>" oninput="mudaValor()">

            <input type="submit" value="Reajustar" id="enviar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>

        <?php
            $aumento = $valor * ($reajuste / 100 + 1);
            
            echo "<p>O produto que custava " . numfmt_format_currency($moeda, $valor, "BRL") . " com <strong> $reajuste% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($moeda, $aumento, "BRL") . "</strong> a partir de agora.</p>";                   
        ?>
    </section>

    <script>
        function mudaValor() {
            p.innerText = idreajuste.value;
        }
    </script>
</body>
</html>