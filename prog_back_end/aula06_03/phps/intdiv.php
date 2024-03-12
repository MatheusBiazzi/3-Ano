<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função intDiv()</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        /*
         colocar estilos de cada página aqui para ficar feio nelas 
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
        <h1>intDiv()</h1>
        <p>A função IntDiv divide dois números e devolve a parte inteira do resultado.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <p>
            <label for="in1">Digite o primeiro número: </label>
            <input type="number" name="in1" id="in1">
        </p>
        <p>
        <label for="in2">Digite o segundo número: </label>
            <input type="number" name="in2" id="in2">
        </p>
        <p>
            <input type="submit" value="Tente você mesmo!">
        </p>
        </form>
        <?php
        error_reporting(0);
        ini_set('display_errors', 0);

        $n1 = $_GET['in1'];
        $n2 = $_GET['in2'];

        $res = intdiv($n1,$n2);

        echo "<p>O resultado inteiro da divisão entre $n1 e $n2 é: $res</p>"
        ?>
        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>