<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
            // $_REQUEST é uma junção de $_GET $_POST $_COOKIES
            //var_dump($_GET);
            $nome = $_GET["nome"] ?? "Sem nome,";
            $sobrenome = $_GET["sobrenome"] ??"Desconhecido";

            echo "Olá, <strong>$nome $sobrenome</strong> este é o resultado do formulário!";
        ?>     

        <p>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>
    </main>
</body>
</html>