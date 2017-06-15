<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Nieuw boek</h1>
        <form action="insert.php" method="POST">
            <label for="titel">Titel:</label><br>
            <input type="text" name="titel" value="<?php echo $titelVal; ?>"/><br>
            <mark><?php echo $titelErr; ?></mark>
            <br>
            <label for="uitgavedatum">Datum van uitgave (DD/MM/YYYY):</label><br>
            <input type="text" name="uitgavedatum" value="<?php echo $uitgavedatumVal; ?>"/><br>
            <mark><?php echo $uitgavedatumErr; ?></mark>
            <br>
            <label for="prijsExclBtw">Prijs excl. BTW (geheel getal of kommagetal met max 2 decimalen):</label><br>
            <input type="text" name="prijsExclBtw" value="<?php echo $prijsExclBtwVal; ?>"/><br>
            <mark><?php echo $prijsExclBtwErr; ?></mark>
            <br>
            <label for="emailUitgeverij">Email uitgeverij (valid emailadres):</label><br>
            <input type="text" name="emailUitgeverij" value="<?php echo $emailUitgeverijVal; ?>"/><br>
            <mark><?php echo $emailUitgeverijErr; ?></mark>
            <br>
            <div>
                <input type="hidden" name="postcheck" value="true"/>
                <input type="submit" value="Aanmaken">
            </div>
        </form>
        <a href="index.php">Terug naar overzicht</a>
    </body>
</html>