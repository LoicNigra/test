<?php
//Deze eerste if-structuur is eigenlijk al een vorm van validatie
//Eventueel kan je het volgende coderen om te checken of de postcheck wel als key in de GET variabele zit
//en om dus te checken of een gebruiker niet per ongeluk op deze pagina "landt" zonder dat hij het
//invulformulier heeft ingevuld.
if (isset($_GET["postcheck"])) {
    //OK, het formulier werd ingevuld, we kunnen deze gewoon uitlezen en weergeven
    
} else {
    //voornaam is niet aanwezig in GET
    //Het formulier op de pagina "index.php" werd dus niet ingevuld.
    //We kunnen een foutmelding weergeven, of gewoon redirecten naar de invulpagina
    header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
           Uw zoekterm is:
        </h1>
        <div>
            <?php
            //We kunnen de POST variabelen gewoon uitlezen en weergeven
            echo $_GET["zoekterm"];
            ?>
        </div>
    </body>
</html>
