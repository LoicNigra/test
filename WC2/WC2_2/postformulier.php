<h1>Welkom</h1>
<form action="index.php" method="POST">
    <h2>Personalia</h2>
    <label for="voornaam">Uw voornaam:</label><br>
    <input type="text" name="voornaam" value="<?php echo $voornaamVal; ?>"/><br>
    <mark><?php echo $voornaamErr; ?></mark>
    <br>
    <label for="achternaam">Uw achternaam:</label><br>
    <input type="text" name="achternaam" value="<?php echo $achternaamVal; ?>"/><br>
    <mark><?php echo $achternaamErr; ?></mark>
    <br>
    <h3>Geboortedatum</h3>
    <label for="geboorteDatumDag">Dag:</label><br>
    <input type="text" name="geboorteDatumDag" value="<?php echo $geboorteDatumDagVal; ?>"/><br>
    <mark><?php echo $geboorteDatumDagErr; ?></mark>
    <br>
    <label for="geboorteDatumMaand">Maand:</label><br>
    <input type="text" name="geboorteDatumMaand" value="<?php echo $geboorteDatumMaandVal; ?>"/><br>
    <mark><?php echo $geboorteDatumMaandErr; ?></mark>
    <br>
    <label for="geboorteDatumJaar">Jaar:</label><br>
    <input type="text" name="geboorteDatumJaar" value="<?php echo $geboorteDatumJaarVal; ?>"/><br>
    <mark><?php echo $geboorteDatumJaarErr; ?></mark>
    <br>
    <label for="geslacht">Uw geslacht:</label><br>
    <input type="radio" name="geslacht" value="Man" <?php echo ($geslachtVal=="Man"?"checked":""); ?>/>Man<br>
    <input type="radio" name="geslacht" value="Vrouw" <?php echo ($geslachtVal=="Vrouw"?"checked":""); ?> />Vrouw<br>
    <mark><?php echo $geslachtErr; ?></mark>
    <h2>Contactgegevens</h2>
    <label for="adres">Uw adres:</label><br>
    <input type="text" name="adres" value="<?php echo $adresVal; ?>"/><br>
    <mark><?php echo $adresErr; ?></mark>
    <br>
    <label for="telefoonnummer">Uw telefoonnummer:</label><br>
    <input type="text" name="telefoonnummer" value="<?php echo $telefoonnummerVal; ?>"/><br>
    <mark><?php echo $telefoonnummerErr; ?></mark>
    <br>
    <label for="gsmnummer">Uw GSM nummer:</label><br>
    <input type="text" name="gsmnummer" value="<?php echo $gsmnummerVal; ?>"/><br>
    <mark><?php echo $gsmnummerErr; ?></mark>
    <h2>Andere gegevens</h2>
    <label for="rijksregisternummer">Uw rijksregisternummer:</label><br>
    <input type="text" name="rijksregisternummer" value="<?php echo $rijksregisternummerVal; ?>"/><br>
    <mark><?php echo $rijksregisternummerErr; ?></mark>
    <br>
    <label for="bankrekeningnummer">Uw bankrekeningnummer:</label><br>
    BE<input type="text" name="bankrekeningnummer" value="<?php echo $bankrekeningnummerVal; ?>"/><br>
    <mark><?php echo $bankrekeningnummerErr; ?></mark>
    <h2>Inschrijvingsgegevens</h2>
    <label for="gewensteCursus">De cursus waarvoor u zicht wilt inschrijven:</label>
    <select name="gewensteCursus">
        <option value="Dig-X" <?php echo ($gewensteCursusVal=="Dig-X"?"selected":"");?>>Dig-X</option>
        <option value="Multec" <?php echo ($gewensteCursusVal=="Multec"?"selected":"");?>>Multec</option>
    </select>
    <mark><?php echo $gewensteCursusErr; ?></mark>
    <br>
    <label for="hogerOnderwijsInVerleden">Heeft u in het verleden reeds hoger onderwijs genoten?</label><br>
    <input type="checkbox" name="hogerOnderwijsInVerleden" value="ja" <?php echo ($hogerOnderwijsInVerledenVal=="ja"?"checked":"");?>/><br>
    <mark><?php echo $hogerOnderwijsInVerledenErr; ?></mark>
    <br>
    <div>
        Druk op de knop om u in te schrijven:
        <input type="hidden" name="postcheck" value="true"/>
        <input type="submit" value="Inschrijven">
    </div>
</form>