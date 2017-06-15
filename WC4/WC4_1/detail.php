<?php

include_once './Database/CRUD/BoekDb.php';
if($gevondenBoek = BoekDb::getById($_GET['boekId'])){
    
}else{
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Details</h1>
        <p>
        ID: <?php echo $gevondenBoek->boekId ?> <br>
        Titel: <?php echo $gevondenBoek->titel ?> <br>
        Datum van uitgave: <?php echo $gevondenBoek->uitgavedatum ?> <br>
        Prijs excl. BTW: <?php echo $gevondenBoek->prijsExclBtw ?> <br>
        Prijs incl. BTW: <?php echo $gevondenBoek->prijsExclBtw * 1.06 ?> <br>
        Emailadres uitgeverij: <?php echo $gevondenBoek->emailUitgeverij ?> <br>
        </p>
        <a href="index.php">Terug naar overzicht</a>
    </body>
</html>

