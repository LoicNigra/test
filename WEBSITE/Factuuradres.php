<?php require 'PHP/include.php';
// Controle of alles is ingevuld
if (Form::isPost()) {
    if (Form::post('postcode_Factuur', false) == false) {
        redirect('Registreren.php?error=Postcode is niet ingevuld');
    } elseif (Form::post('stad_Factuur', false) == false) {
        redirect('Registreren.php?error=Stad is niet ingevuld');
    } elseif (Form::post('adres_Factuur', false) == false) {
        redirect('Registreren.php?error=straatnaam is niet ingevuld');
    } elseif (Form::post('huisnummer_Factuur', false) == false) {
        redirect('Registreren.php?error=Huisnummer is niet ingevuld');
    } elseif (Form::post('postcode_Lever', false) == false) {
        redirect('Registreren.php?error=postcode is niet ingevuld');
    } elseif (Form::post('stad_Lever', false) == false) {
        redirect('Registreren.php?error=Stad is niet ingevuld');
    } elseif (Form::post('adres_Lever', false) == false) {
        redirect('Registreren.php?error=straatnaam is niet ingevuld');
    } elseif (Form::post('huisnummer_Lever', false) == false) {
        redirect('Registreren.php?error=Huisnummer is niet ingevuld');
    }

    $postcode_Factuur = Form::post('postcode_Factuur');
    $stad_Factuur = Form::post('stad_Factuur');
    $adres_Factuur = Form::post('adres_Factuur');
    $huisnummer_Factuur = Form::post('huisnummer_Factuur');
    $postcode_Lever = Form::post('postcode_Lever');
    $stad_Lever = Form::post('stad_Lever');
    $adres_Lever = Form::post('adres_Lever');
    $huisnummer_Lever = Form::post('huisnummer_Lever');
    $betaalmethode = Form::post('betaalmethode');


// Registreren, aanmaken van een nieuwe login
    Bestelling::registerBestelling($postcode_Factuur, $stad_Factuur, $adres_Factuur, $huisnummer_Factuur, $postcode_Lever, $stad_Lever, $adres_Lever, $huisnummer_Lever, $betaalmethode);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'templates/head.php'; ?>
    </head>
    <body>
        <?php include 'templates/menu.php'; ?>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">


            </div>
        </div>


        <form action="Bestelling.php" method="POST">
            <div class="factuur">
                <h3>Factuuradres</h3>
                <p>Postcode</p>
                <input type="text" id="postcode_Factuur" name="postcode_Factuur" class="form" required>
                <p>Stad</p>
                <input type="text" id="stad_Factuur" name="stad_Factuur" class="form" required>
                <p>Straatnaam</p>
                <input type="text" id="adres_Factuur" name="adres_Factuur" class="form" required>
                <p>Huisnummer</p>
                <input type="text" id="huisnummer_Factuur" name="huisnummer_Factuur" class="form" required>
            </div>

            <div class="factuur">
                <h3>Leveradres</h3>
                <p>Postcode</p>
                <input type="text" id="postcode_Lever" name="postcode_Lever" class="form" required>
                <p>Stad</p>
                <input type="text" id="stad_Lever" name="stad_Lever" class="form" required>
                <p>Straatnaam</p>
                <input type="text" id="adres_Lever" name="adres_Lever" class="form" required>
                <p>Huisnummer</p>
                <input type="text" id="huisnummer_Lever" name="huisnummer_Lever" class="form" required>
            </div>

            <div class="factuur">
                <select class="myButton" id="betaalmethode" name="betaalmethode">
                    <option value="Bancontact">Bancontact</option>
                    <option value="Paypal">Paypal</option>
                    <option value="Afterpay">Afterpay</option>
                    <option value="Bitcoin">Bitcoin</option>
                </select>
                <br><br>
                <input type="checkbox" value="Accepteer de algemene voorwaarden" required oninvalid="this.setCustomValidity('Gelieve de algeneme voorwaarden goed te keuren.')"
                     >  Accepteer de algemene  voorwaarden
                <br>

            </div>
<br>
            <a href="Bestelling.php">
                <input class="myButton" id="kopen" type=submit value="Doorgaan">
            </a>
        </form>

        <br><br><br>

        <!--   Icon Section   -->
        <?php include 'templates/footer.php'; ?>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

        <script>
            function getQueryParams(qs) {
                qs = qs.split('+').join(' ');

                var params = {},
                    tokens,
                    re = /[?&]?([^=]+)=([^&]*)/g;

                while (tokens = re.exec(qs)) {
                    params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
                }

                return params;
            }

            var error = getQueryParams(document.location.search).error;
            if (error !== undefined) {
                alert(error)
            }
        </script>

    </body>
</html>
