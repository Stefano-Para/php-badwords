<?php
$drugo = "\"Walter... Walter, non posso presentare il conto al muso giallo che mi ha pisciato sul tappeto... Si può sapere di che c. stai parlando?\"";
$walter = "\"Di che c. stai parlando tu? La questione qui non è il muso giallo, io parlo di una linea tracciata sulla sabbia Drugo, se qualcuno la oltrepassa tu non devi \r\n... E poi scusa, muso giallo non mi sembra l'appellativo corretto per un cinese, asiatico è preferibile.\"";

$testo = '<pre>' . "Drugo: " . $drugo . "\r\n \r\n" . "Walter: " . $walter . '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php - badwords</title>
    </head>
    <body>
    <h1>The Big Lebosky</h1>

    <h3>Testo</h3>
    <p>
        <?php
            echo '<pre>';
            var_dump($testo);
            echo '</pre>';

            echo $testo;
        ?>
    </p>
    <h3>Testo censurato</h3>
    <p>
        <?php
            echo '<pre>';
            var_dump($testo);
            echo '</pre>';
            
            echo str_replace($_GET["word"] , "***", $testo);
        ?>
    </p>

    </body>
</html>