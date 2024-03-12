<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seno</title>
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
        <h1>sin()</h1>
        <p>A função sin() calcula função trigonométrica do Seno</p>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <p>
                <label for="isin">Digite o valor do seno desejado:</label>
                <input type="number" name="isin" id="isin" min="0">
            </p>
            <p>
                <input type="submit" value="Tente você mesmo">
            </p>
        </form>

        <?php 
        error_reporting(0);
        ini_set('display_errors', 0);

        $vlsin = $_GET['isin'];
        $vlconvert = deg2rad($vlsin);
        $vlfinalsin = sin($vlconvert);

        echo "<p>O seno de $vlsin é : $vlfinalsin </p>";
        ?>

        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>