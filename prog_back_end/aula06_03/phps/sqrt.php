<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função SQTR()</title>
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
        <h1>SQTR()</h1>
        <p>A função sqrt() calcula a raiz quadrada de um número.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <p>
                <label for="iraiz">Digite um número e descubra sua raiz quadrada :</label>
                <input type="number" name="iraiz" id="iraiz" min="0">
            </p>
            <p>
                <input type="submit" value="Tente você mesmo!">
            </p>
        </form>

        <?php
        error_reporting(0);
        ini_set('display_errors', 0);

        $raiz = $_GET['iraiz'];
        $resraiz = sqrt($raiz);

        echo "<p>O resultado da raiz de $raiz é $resraiz</p>"
        
        ?>

        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>