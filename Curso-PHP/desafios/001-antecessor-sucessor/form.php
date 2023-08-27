<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor/Sucessor</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <section>
            
            
            <?php
                $numero = $_GET["numero"];
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "O número escolhido foi $numero<br>
                O seu sucessor é $sucessor<br>
                O seu antecessor é $antecessor";
            ?>
             <p id=" voltar">
               <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
            </p>
        </section>

    </main>
</body>
</html>