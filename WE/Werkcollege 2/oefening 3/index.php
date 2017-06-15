<?php
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
