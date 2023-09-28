<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 013</title>
</head>
<body>
    <header>
        <h1>Caixa Eletrônico</h1>
    </header>

    <main>
        <?php 
            $moeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $num = $_GET["num"] ?? 0;
        ?>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Qual é o valor que você deseja sacar? (R$)*</label>
            <input type="number" name="num" id="idnum" min="5" max="5000" step="5" autofocus required value="<?=$num?>">

            <p id="nota"><sup>*</sup>Notas disponíveis: R$ 100, R$ 50, R$ 10 e R$ 5</p>

            <input type="submit" value="Sacar" id="enviar">
        </form>
    </main>

    <section>
        <h2>Saque de <?=numfmt_format_currency($moeda, $num, "BRL")?> realizado</h2>

        <?php
            $nota100 = intdiv($num, 100);
            $nota50 = intdiv($num % 100, 50);
            $nota10 = intdiv($num % 50, 10);
            $nota5 = intdiv($num % 10, 5);
        ?>

        <p>
            O caixa eletrônico vai entregar as seguintes notas:
        </p>

        <ul>
            <li>
                <img src="../013-caixa-eletronico/img/100_Brazil_real_Second_Obverse.jpg" class="notas" alt="Nota de cem reais"> x<?=$nota100?>
            </li>
            <li>
                <img src="../013-caixa-eletronico/img/50_Brazil_real_Second_Obverse.jpg" class="notas" alt="Nota de cinquenta reais"> x<?=$nota50?>
            </li>
            <li>
                <img src="../013-caixa-eletronico/img/10_Brazil_real_Second_Obverse.jpg" class="notas" alt="Nota de dez reais"> x<?=$nota10?>
            </li>
            <li>
                <img src="../013-caixa-eletronico/img/5_Brazil_real_Second_Obverse.jpg" class="notas" alt="Nota de cinco reais"> x<?=$nota5?>
            </li>
        </ul>
    </section>
</body>
</html>