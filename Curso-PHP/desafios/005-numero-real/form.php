<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador N* Real</title>
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>

    <main>
        <section>
            <?php
                $numero = $_GET["numero"];
                if (empty($numero)) {
                    $numero = 0;
                }
                $inteiro = (int) $numero;
                $fracao = $numero - $inteiro;

                echo "<p>Analisando o número " . number_format($numero, 3, ",", ".") . "<br>informado pelo usuário:</p>";
                echo 
                    "<ul>
                        <li>A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li>
                        <li>A parte fracionária do número é <strong>" . number_format($fracao, 3, ",", ".") . "</strong></li>
                    </ul>";                
            ?>

        <input type="button" value="Voltar" id="button" onclick="javascript:history.go(-1)">
        </section>
    </main>
</body>
</html>