<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função ABS</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        /*
         colocar estilos de cada página aqui para ficar feio nelas 
         OK
        */
        main{
            background-color: white;
            height: inherit;
        }
    </style>
</head>
<body>
    <main>
        <!--Forms padrão p/cada página-->
        <h1>ABS()</h1>
        <p>A função ABS retorna o valor absoluto do número, ou seja, retorna o número informado sem nenhum tipo de sinal</p>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <p>
                <label for="inum">Digite um número:</label>
                <input type="number" name="inum" id="inum">
            </p>
            <p>
                <input type="submit" value="Teste você mesmo!">
            </p>
        </form>

        <?php
        error_reporting(0);
        ini_set('display_errors', 0);

        $num = $_GET['inum'];
        $res = abs($num);

        echo "<p>O valor absoluto de $num é: $res </p> "
        ?>

        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>