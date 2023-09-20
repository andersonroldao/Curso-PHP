<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 010</title>
</head>
<body>
    <header>
        <h1>Cálculo de Idade</h1>
    </header>

    <main>
        <?php 
            $anoAtual = date("Y");
            $nascimento = $_GET["nascimento"] ?? 0;            
            $ano = $_GET["ano"] ?? $anoAtual;
        ?>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <h2>Calculando idade</h2>

            <label for="nascimento">Qual a data de nascimento?</label>
            <input type="number" name="nascimento" id="idnascimento" min="0" max="<?=$ano?>" required value="<?=$nascimento?>">

            <label for="ano">Quer saber a idade em que ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1" required value="<?=$ano?>">

            <input type="submit" value="Qual será minha idade?" id="enviar">
        </form>
    </main>

    <section>
        <h2>Resuldado</h2>

        <?php
            $idade = $ano - $nascimento;
            
            if ($idade == 1) {
                echo "<p>Quem nasceu em $nascimento vai ter<strong> $idade ano</strong> em $ano!</p>";  
            } else {
                echo "<p>Quem nasceu em $nascimento vai ter<strong> $idade anos</strong> em $ano!</p>"; 
            }                   
        ?>
    </section>
</body>
</html>