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
        <form action="pagina2.php" method="GET">
            <label for="zoekterm">Uw zoekterm:
                <input type="text" name="zoekterm"/>
            </label>
            <div>
                Druk op de knop om het formulier te posten:
                <input type="hidden" name="postcheck" value="true"/>
                <input type="submit" value="Verstuur">
            </div>
        </form>

    </body>
</html>
