<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Super Globais</title>
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "QUINTA", time() + 3600);
                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";
                // Recebe dados pela url (query string)
                echo "<h1>Super Gobal GET";
                var_dump($_GET);
                echo "<h1>Super Gobal POST";
                var_dump($_POST);
                echo "<h1>Super Gobal REQUEST</h1>";
                var_dump($_REQUEST);
                echo "<h1>Super Gobal COOKIE</h1>";
                var_dump($_COOKIE);
                echo "<h1>Super Gobal SESSION</h1>";
                var_dump($_SESSION);
                echo "<h1>Super Gobal ENV</h1>";
                var_dump($_ENV);
                echo "<h1>Super Gobal SERVER</h1>";
                var_dump($_SERVER);
            ?>
        </pre>
    </main>
</body>
</html>