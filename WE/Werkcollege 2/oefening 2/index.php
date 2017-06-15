<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
    
    
    
    
        <?php
        $voornaamVal = $achternaamVal = $geboorteDatumDagVal =  $geboorteDatumMaandVal =  $geboorteDatumJaarVal = $geslachtVal = $adresVal = $telefoonnummerVal = $gsmnummerVal = $rijksregisternummerVal = $bankrekeningnummerVal = $gewensteCursusVal = $hogerOnderwijsInVerledenVal = "";
        $voornaamErr = $achternaamErr = $geboorteDatumDagErr =  $geboorteDatumMaandErr =  $geboorteDatumJaarErr = $geslachtErr = $adresErr = $telefoonnummerErr = $gsmnummerErr = $rijksregisternummerErr = $bankrekeningnummerErr = $gewensteCursusErr = $hogerOnderwijsInVerledenErr = "";
        


        include_once './validatiebibliotheek.php';
    
  include_once './validatiebibliotheek.php';
     

        if (landingsDetectie()) {
        
            include './postformulier.php';
        } else {
       
            $voornaamErr = errRequiredVeld("voornaam");
            $achternaamErr = errRequiredVeld("achternaam");
            $geboorteDatumDagErr = errVoegMeldingToe(errRequiredVeld("geboorteDatumDag"), errVeldIsNumeriek("geboorteDatumDag"));
            $geboorteDatumDagErr = errVoegMeldingToe($geboorteDatumDagErr, errVeldMoetGroterDanWaarde("geboorteDatumDag", 0));
            $geboorteDatumDagErr = errVoegMeldingToe($geboorteDatumDagErr, errVeldMoetKleinerDanOfGelijkAanWaarde("geboorteDatumDag", 31));
            $geboorteDatumMaandErr = errVoegMeldingToe(errRequiredVeld("geboorteDatumMaand"), errVeldIsNumeriek("geboorteDatumMaand"));
            $geboorteDatumMaandErr = errVoegMeldingToe($geboorteDatumMaandErr, errVeldMoetGroterDanWaarde("geboorteDatumMaand", 0));
            $geboorteDatumMaandErr = errVoegMeldingToe($geboorteDatumMaandErr, errVeldMoetKleinerDanOfGelijkAanWaarde("geboorteDatumMaand", 12));
            $geboorteDatumJaarErr = errVoegMeldingToe(errRequiredVeld("geboorteDatumJaar"), errVeldIsNumeriek("geboorteDatumJaar"));
            $geboorteDatumJaarErr = errVoegMeldingToe($geboorteDatumJaarErr, errVeldMoetGroterDanWaarde("geboorteDatumJaar", 1850));
            $geboorteDatumJaarErr = errVoegMeldingToe($geboorteDatumJaarErr, errVeldMoetKleinerDanOfGelijkAanWaarde("geboorteDatumJaar", date("Y")));
            $geslachtErr = errRequiredVeld("geslacht");
            $adresErr = errRequiredVeld("adres");
            $telefoonnummerErr = errEenVanDezeVeldenIsIngevuld("telefoonnummer", "gsmnummer");
            $gsmnummerErr = errEenVanDezeVeldenIsIngevuld("telefoonnummer", "gsmnummer");
        $rijksregisternummerErr = errVoegMeldingToe(errRequiredVeld("rijksregisternummer"), errVeldIsNumeriek("rijksregisternummer"));
        $rijksregisternummerErr = errVoegMeldingToe($rijksregisternummerErr, errVeldIsRijksregisternummer("rijksregisternummer"));
        $bankrekeningnummerErr = errVoegMeldingToe(errRequiredVeld("bankrekeningnummer"), errVeldIsNumeriek("bankrekeningnummer"));
    $bankrekeningnummerErr = errVoegMeldingToe($bankrekeningnummerErr, errVeldIsBankrekeningnummer("bankrekeningnummer"));
        $gewensteCursusErr = errRequiredVeld("gewensteCursus");
            if (isFormulierValid()) {
             
                include './resultaatweergave.php';
            } else {
              
                $voornaamVal = getVeldWaarde("voornaam");
                $achternaamVal = getVeldWaarde("achternaam");
                $geboorteDatumDagVal = getVeldWaarde("geboorteDatumDag");
                $geboorteDatumMaandVal = getVeldWaarde("geboorteDatumMaand");
                $geboorteDatumJaarVal = getVeldWaarde("geboorteDatumJaar");
                $geslachtVal = getVeldWaarde("geslacht");
                $adresVal = getVeldWaarde("adres");
                $telefoonnummerVal = getVeldWaarde("telefoonnummer");
                $gsmnummerVal = getVeldWaarde("gsmnummer");
                $rijksregisternummerVal = getVeldWaarde("rijksregisternummer");
                $bankrekeningnummerVal = getVeldWaarde("bankrekeningnummer");
                $gewensteCursusVal = getVeldWaarde("gewensteCursus");
                $hogerOnderwijsInVerledenVal = getVeldWaarde("hogerOnderwijsInVerleden");

                include './postformulier.php';
            }
        }

        function isFormulierValid() {
            global $voornaamErr, $achternaamErr, $geboorteDatumDagErr, $geboorteDatumMaandErr, $geboorteDatumJaarErr, $geslachtErr, $adresErr, $telefoonnummerErr, $gsmnummerErr, $rijksregisternummerErr, $bankrekeningnummerErr, $gewensteCursusErr, $hogerOnderwijsInVerledenErr;
            $allErr = $voornaamErr . $achternaamErr . $geboorteDatumDagErr . $geboorteDatumMaandErr . $geboorteDatumJaarErr . $geslachtErr . $adresErr . $telefoonnummerErr . $gsmnummerErr . $rijksregisternummerErr . $bankrekeningnummerErr . $gewensteCursusErr . $hogerOnderwijsInVerledenErr;
            if (empty($allErr)) {
                //Formulier is valid
                return true;
            } else {
                return false;
            }
        }

        function landingsDetectie() {
            return !isset($_POST['postcheck']);
        }
        ?>
    </body>
</html>
