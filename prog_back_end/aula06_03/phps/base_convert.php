<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Base_convert</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        main{
            background-color: white;
            height: inherit;
        }
    </style>
</head>
<body>
    <main>
        <!--Forms padrão p/cada página-->
        <h1>Base_convert()</h1>
        <p>A função Base_convert converte números entre bases arbitrárias</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            
            <p>
                <label for="inum">Digite um número:</label>
                <input type="number" name="inum" id="inum">
            </p>
            <p>
                <label for="inum">Digite a base do número acima:</label>
                <input type="number" name="base" id="inum">
            </p>
            <p>
                <label for="inum">Digite a base que deseja convertelo:</label>
                <input type="number" name="conv" id="inum">
            </p>
            <p>
                <input type="submit" value="Teste você mesmo!" >
            </p>
        </form>
        <?php
            error_reporting(0);
            ini_set('display_errors', 0);

            $n1 = $_GET['inum'];
            $baseinf = $_GET['base'];
            $baseres = $_GET['conv'];

            $res = base_convert($n1,$baseinf,$baseres);

            echo "<p>O número $n1 na base $baseinf mudado para a base $baseres, é igual a: $res</p>";
        ?>
        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>