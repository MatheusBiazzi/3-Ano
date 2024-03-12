<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor máximo</title>
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
        <h1>max()</h1>
        <p>A função max() encontra o maior valor entre um grupo de números.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <p>
                <label for="in1">Digite um número:</label>
                <input type="number" name="in1" id="in1">
            </p>
            <p>
                <label for="in2">Digite um número:</label>
                <input type="number" name="in2" id="in2">
            </p>
            <p>
                <label for="in3">Digite um número:</label>
                <input type="number" name="in3" id="in3">
            </p>
            <p>
                <label for="in4">Digite um número:</label>
                <input type="number" name="in4" id="in4">
            </p>
            <p>
                <label for="in5">Digite um número:</label>
                <input type="number" name="in5" id="in5">
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
        $n3 = $_GET['in3'];        
        $n4 = $_GET['in4'];        
        $n5 = $_GET['in5'];

        $vetor = array($n1,$n2,$n3,$n4,$n5);
        $res = max($vetor);  

        echo "<p>O maior valor entre os números " . implode(", ", $vetor) . " é: <strong> $res</strong></p> ";
        ?>
        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>