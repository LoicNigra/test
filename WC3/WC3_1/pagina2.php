<?php
//Deze eerste if-structuur is eigenlijk al een vorm van validatie
//Eventueel kan je het volgende coderen om te checken of de postcheck wel als key in de POST variabele zit
//en om dus te checken of een gebruiker niet per ongeluk op deze pagina "landt" zonder dat hij het
//invulformulier heeft ingevuld.
if (isset($_POST["postcheck"])) {
    //OK, het formulier werd ingevuld, we kunnen deze gewoon uitlezen en weergeven
    
} else {
    //voornaam is niet aanwezig in POST
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
            Weergave
        </h1>
        <div>
            Het geuploade bestand ziet er als volgt uit:
        </div>
        <div>
            <?php
            
            
            if ($_FILES["bestand"]["type"] == "image/jpeg" || $_FILES["bestand"]["type"] == "image/png"){
                $bestandsnaam = time();
                move_uploaded_file($_FILES["bestand"]["tmp_name"], "./uploads/" . $bestandsnaam);
                     
                ?>
            
            <img src="./uploads/<?php echo $bestandsnaam; ?>">
            <?php
            }else{?>
            <mark>
                Sorry, enkel jpeg of png files kunnen geupload worden.
            </mark>
            <?php
            
            }
            ?>
        </div>
        <div>
            <a href='index.php'>Ga terug naar de upload pagina</a>
        </div>
    </body>
</html>
