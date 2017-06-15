<?php
//Aangezien we de ingevoerde gegevens niet willen valideren, kunnen we het formulier rechstreeks posten naar een andere pagina
//We hebben er namelijk geen nood aan om het formulier dat we op deze pagina hebben opgebouwd te hergebruiken voor eventuele niet-gevalideerde gegevens te verbeteren.
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Welkom</h1>
        <div>
            U kan op deze pagina een afbeelding in jpeg of png uploaden.
             Afhankelijk van de instellingen van de webserver moet uw afbeelding kleiner zijn dan 2MB.
        </div>
        <form action="pagina2.php" method="POST" enctype="multipart/form-data">
            <label for="bestand">Te uploaden bestand:
                <input type="file" name="bestand"/>
            </label>
            <div>
                Druk op de knop om het formulier te posten:
                <input type="hidden" name="postcheck" value="true"/>
                <input type="submit" value="Verstuur">
            </div>
        </form>

    </body>
</html>
