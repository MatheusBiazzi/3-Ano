<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipotenusa</title>
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
        <h1>hypot()</h1>
        <p>A função hypot() calcula o comprimento da hipotenusa em um triângulo usando os comprimentos dos outros dois lados (catetos).</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <p>
                <label for="inumx">Informe o valor de x:</label>
                <input type="number" name="inumx" id="inum">
            </p>
            <p>
                <label for="inumy">Informe o valor de y:</label>
                <input type="number" name="inumy" id="inum">
            </p>
            <p>
                <input type="submit" value="Tente você mesmo!">
            </p>
        </form>
        <?php
        error_reporting(0);
        ini_set('display_errors', 0);

        $vl1 = $_GET['inumx'];
        $vl2 = $_GET['inumy'];

        $res = hypot($vl1,$vl2);

        echo "<p>A soma do cateto($vl1) + cateto($vl2) é igual a : $res </p>"
        ?>
        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>