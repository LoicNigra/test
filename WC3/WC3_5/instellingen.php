<?php
include "keuzes/instellingen.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $instellingentitel; ?></title>
    </head>
    <body>
        <h1>
            <?php echo $instellingentitel; ?>
        </h1>

        <form action="doinstellingen.php" method="post">
            <label for="naam"><?php echo $instellingennaam; ?></label><br>
            <input type="text" name="naam" value="<?php echo $naam; ?>"/><br>
            <label for="achtergrondkleur"><?php echo $instellingenachtergrondkleur; ?></label>
            <select name="achtergrondkleur" size="3">
                <option value="#FF0000" <?php echo ($achtergrondkleur == "#FF0000" ? "selected" : ""); ?>>Rood</option>
                <option value="#00FF00" <?php echo ($achtergrondkleur == "#00FF00" ? "selected" : ""); ?>>Groen</option>
                <option value="#FFFFFF" <?php echo ($achtergrondkleur == "#FFFFFF" ? "selected" : ""); ?>>Wit</option>
            </select>
            <br>
            <label for="tijdszone"><?php echo $instellingentijdszone; ?></label>
            <select name="tijdszone">
                <?php
                for ($i = -12; $i <= 12; $i++) {
                    echo '<option value="' . $i . '" ' . ($tijdszone == $i ? "selected" : "") . '>' . $i . ':00</option>';
                }
                ?>
            </select>
            <br>
            <div>
                <?php echo $instellingentaal; ?>
            </div>
            <div>
                <input type="radio" name="taal" value="nl" <?php echo ($taal == "nl" ? "checked" : ""); ?>/>Nederlands<br>
                <input type="radio" name="taal" value="fr" <?php echo ($taal == "fr" ? "checked" : ""); ?> />Francais<br>
                <input type="radio" name="taal" value="en" <?php echo ($taal == "en" ? "checked" : ""); ?> />English<br>
                <input type="hidden" name="postcheck" value="true"/>
                  <div>
                <?php echo $instellingenuitleg; ?>
            </div>
                <input type="submit" value="<?php echo $instellingenopslaan; ?>">
            </div>
        </form>
        <a href="index.php"><?php echo $instellingenterug; ?></a>
    </body>
</html>
