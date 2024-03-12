<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangente</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        /*
         colocar estilos de cada página aqui para ficar feio nelas
         OK 
        */
        main{
            background-color: white;
            width: 679px;
            height: inherit;
        }
    </style>
</head>
<body>
    <main>
        <!--Forms padrão p/cada página-->
        <h1>tan()</h1>
        <p>A função tan() calcula função trigonométrica da Tangente</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <p>
                <label for="itan">Digite o valor da tangente desejado:</label>
                <input type="number" name="itan" id="itan" min="0">
            </p>
            <p>
                <input type="submit" value="Tente você mesmo">
            </p>
        </form>
        <?php 
        error_reporting(0);
        ini_set('display_errors', 0);

        $vltan = $_GET['itan'];
        $vlconvert = deg2rad($vltan);
        $vlfinaltan = tan($vlconvert);
        
        echo "<p>A tangente de $vltan é : $vlfinaltan<p>";
        ?>
        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>